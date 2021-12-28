<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

</head>
<body>
<script type="text/javascript">
    $(document).ready(function() {
        let mydata = {
            bannerCode: "",
            categoryCode: "",
            typeId: "0",
            pageNumber: "1",
            rowPerpage: "10",
            search: "",
        };
        $.ajax({
            url: "http://45.15.25.142:8822/get-list-product",
            type: "post",
            contenType: "application/json",
            headers: {
                "API-Key": "initokenspesialridho",
            },
            data: JSON.stringify(mydata),
            success: function (data) {
                console.log(data);
            },
            error: function (data) {
                console.log(data);
            },
        })
    })
</script>
</body>
</html>
