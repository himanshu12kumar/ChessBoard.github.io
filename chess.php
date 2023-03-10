<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form_con{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        table{
            margin-top: 50px;
    padding: 0px 15px;
    display: flex;
    align-items: center;
    justify-content: center;
        }
        tr td{
            border: 1px solid black;
            width: 50px;
            height: 50px;
        }
        form{
    display: flex;
    align-items: center;
    justify-content: center;
        }
        #number{
            width: 389px;
    height: 37px;
    font-size: 24px;
    line-height: 37px;
    padding-left: 20px;
        }
        #btn{
            width: 100px;
    height: 37px;
    line-height: 41px;
    font-size: 21px;
    margin-left: 10px
        }
        @media (max-width: 375px){
            #number {
    width: 217px;
    height: 24px;
    font-size: 16px;
}
#btn {
    height: 29px;
    line-height: 29px;
    font-size: 18px;
}
.form_con h1{
    font-size: 17px;
    margin-bottom: 22px;
}
        }
    </style>
</head>
<body>
    <div class="form_con">
        <h1>Enter the number to create a square chess board</h1>
        <form action="" method="POST">
            <input type="text" placeholder="Enter size" name="value" id="number">
            <input type="submit" value="submit" name="submit" id="btn">
        </form>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        $value = $_POST['value'];
    ?>
        <table cellspacing="0"  >
            <thead>
                <?php 
                for($i=1;$i<=$value;$i++)
                {
                ?>
                <tr>
                    <?php
                    for ($j = 1; $j <= $value; $j++) {
                    ?>
                        <?php 
                            if(($i%2!=0 &&  $j%2!=0) || ($i%2==0  && $j%2==0))
                            {
                                ?>
                                    <td bgcolor="black" ></td>
                                <?php
                            }
                            else{
                                ?>
                                    <td bgcolor="white" ></td>
                                <?php
                            }
                        ?>
                        
    
                    <?php
                    }
                    ?>
                </tr>
                <?php 
                }
                ?>
            </thead>
        </table>
    <?php
    }
    ?>
</body>
</html>





