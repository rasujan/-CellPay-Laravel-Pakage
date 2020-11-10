<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/cosmo/bootstrap.min.css" />


    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <title>CellPay Payment Gateway</title>
</head>

<body class="container">
    <div class="col-6 offset-3">
        <div class="card">
            <div class="card-header">
                <div class="card-title text-center">
        <h2> <strong> CellPay Transaction Summary </strong> </h2>
                </div>
            </div>
            <div class="card-body">
        <h4> <strong> Description : </strong> {{$description}}</h4> 
        <h4> <strong> Amount : </strong> {{$amount}} </h4>
        <h4> <strong> Invoice Number : </strong> {{$invoice_number}} </h4>
    <form action={{$url}} method="POST">
        @csrf
        <input value={{$merchant_id}} name="merchant_id" type="hidden">
        <input value={{$amount}} name="amount" type="hidden">
        <input value={{$invoice_number}} name="invoice_number" type="hidden">
        <input value={{$description}} name="description" type="hidden">
        <input value={{$success_callback}} type="hidden" name="success_callback">
        <input value={{$failure_callback}} type="hidden" name="failure_callback">
        <input value={{$cancel_callback}} type="hidden" name="cancel_callback">
        <input value="Proceed to CellPay" class="btn btn-outline-primary btn-block " type="submit">
    </div>
    <div class="card-footer">
        <div class="card-title text-center">
                Cellcom Pvt Ltd
        </div>   
    </div>
    </form>
    </div>
    </div>
</body>
