<html lang="ru">
<head>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Калькулятор</title>
</head>
<body>
    <?php
    function calc()
    {
        if(isset($_POST['btnCalc']))
          $message = "nit";
        {
            if (isset($_POST['a']) && !empty($_POST['a']))
            {
                 $a = $_POST['a'];
            }
             if (isset($_POST['b']) && !empty($_POST['b']))
             {
                 $b = $_POST['b'];
             }
             if (isset($_POST['action']) && !empty($_POST['action']))
            {
              $action = $_POST['action'];
             }
            switch ($action)
            {
                case '-':$message = "$a - $b= "; $message .= $a-$b; break;
                case '+':$message = "$a + $b= "; $message .= $a+$b; break;
                case '*':$message = "$a * $b= "; $message .= $a*$b; break;
                case '/':$message = "$a / $b= "; $message .= $a/$b; break;
                default: $message = "?";
             }
        }
    return $message;
}
?>
<div class="container">
<h1> Калькулятор </h1>
<div class="row">
    <div class="col-6">
        <form action="calk.php" method="post">
            <div class="mb-3" id="a1">
                <label class="form-label">введите число A</label>
                <input type="text" class="form-control" name="a">
            </div>
            <div>
                <label class="form-label">введите число B</label>
                <input type="text" class="form-control" name="a">
            </div>

            <div class="mb-3">
                <select class="form-select" name="action">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="btnCalc">Посчитать</button>
        </form>
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                = <br>
                <?php echo calc();?>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Дополнительный JavaScript; выберите один из двух! -->

<!-- Вариант 1: Bootstrap в связке с Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

<!-- Вариант 2: Bootstrap JS отдельно от Popper
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
-->
</body>
</html>







