<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Laravel</title>

    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
</head>
<body>
<div class="container">
    <h2>
        'firstTable', 'secondTable' имена таблиц. Для выборки всех записей из таблицы просто оставьте поля пустыми.
    </h2>
    <form action="/firstTable" id="selectForm" method="POST">
        <div class="form-group">
            <label for="table_name">Table Name*:</label>
            <input type="text"  class="form-control" id="table_name" required="required">
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control" name="price" id="price">
        </div>
        <div class="form-group">
            <label for="price">Num:</label>
            <input type="number" class="form-control" name="num" id="num">
        </div>
        {{ csrf_field() }}
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
<script>
    $(document).ready(function () {
        $("#selectForm").validate({
            rules:{
                table_name: "required",
                price: "number",
                num: "number"
            },
            submitHandler: function(form) {
                $('#selectForm').attr('action','/'+$('#table_name').val());
                form.submit();
//                var data = {name : $('#name').val(),  price: $('#price').val() , num: $('#num').val()};
//                $.ajax({
//                    method: "post",
//                    headers: {
//                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//                    },
//                    url: "/"+$('#table_name').val(),
//                    dataType: "json",
//                    data: data,
//                    success: function (data) {
//                        console.log(data);
//                    }
//
//                });
            }
        });
    })
</script>
</body>
</html>
