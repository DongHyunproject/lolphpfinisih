<?php


$url='https://www.youtube.com/watch?v=X6sxSfGz2bI';

?>

<!DOCTYPE html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>MySql-PHP 연결 테스트</title>
</head>
<body>

<div class="card" style="width: 18rem;">
    <div class="embed-responsive embed-responsive-16by9">
echo <?php echo $url; ?>
        <iframe class="embed-responsive-item" src="<?php echo $url; ?>" allowfullscreen></iframe>
    </div>
    <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
</div>

<div class="card" style="width: 18rem;">
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/v64KOxKVLVg" allowfullscreen></iframe>
    </div>
    <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
</div>


<div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/137857207" allowfullscreen></iframe>
</div>
<!---->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
</nav>

<!--card -->
<div class="row">
<div class="card" style="width: 18rem;">
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/v64KOxKVLVg" allowfullscreen></iframe>
    </div>
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>

    <div class="card-body">
        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWFRgWFhYYGRgaHBwYHBgaHBoYGBwYGBgZGhgcGhocIy4lHCErIRoYJjgmKy8xNTU1GiQ7QDszPy40NTEBDAwMEA8QHhISHzQrJCw0NDQ2NDQ0NDQ0PTQ0NDQ0NjQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NP/AABEIAK8BIAMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAAEBQIDBgEAB//EAD8QAAIBAgQEBAQFAwMCBQUAAAECEQADBBIhMQVBUWEicYGRBjKhsRNCwdHwFFLhYnKCM/EVI5KiwgcWU2Oy/8QAGgEAAwEBAQEAAAAAAAAAAAAAAQIDAAQFBv/EACkRAAICAgICAQQCAgMAAAAAAAABAhEDIRIxBEFREyJxgQVhMqGRscH/2gAMAwEAAhEDEQA/APkteqRQ1zKafixDldruWvZaFMx4VIVzLVjanQQOm8etMkzBWCsBjLfKN+/anD3BDNIWeQGpMQNfIctKG4WQFQkSoLFukwAoPt9aNdc7llEyfADsAAJJ7Coyu9o78MUo69izU6ZSSfT2qy2xQnLq0QTyWe/M0RjAEMZiTEkgR6ATQN68TpGg61knL0CTjD3sYWGJgxrG52Uf6V3J7mo3ewk9yJ/YelUWUOQqfzEECRoBz160ZbwpjWe0wTQ4NMdSc1QKi+S951+mvtFWqyjoT30H/pEk+prt1OUr5afqagwjckeUA1RQbJOol4GbdjHYBV9yfvVyMi7z5jX7iqbVlWEKxndjGYwO+1RCAmFMR/dz76UVH0LJuO6QWAJ5x+49IqxbY3Gh9wR/OVU2DqNf19utE22Ekz2PLy1qnHRoyTeyu6gdAjaQZU7kb6HqNTVdrgM7uI7DX6kRRjBAdQeXSNee8VTxDEIkKiKXgEs2oE7ALsT51o8ukGccdcp060CX+EqssXVEGm+dj7bntSu7lnwgxync9z0q++7vLsSwGk8h0A5DyFUBK6oRl7Z52WUW/tVIriuFaMsYRmIVQSx2A3NP8R8IPbRXvXbVoNqA7eKOy7t/xBq/00v8mQUrdIyDrVbCvofBvgG3iFzpjA6AkMqWyryBMDOwCz1IihOPfA4w6tduXltpICKivfYnkC5CKWMTOgqEuLlxTKbXZhYqYw7HLAJzGFA1JMgaDzMU+4L8OnEo5Sc6MmnJkeQSO6wSe09K+i4b4es2GDKssqhEn8oE5iO7FmJPeK30l7IZfKjj/JiOH/CrWbb4i+BmRSy2t/EwyoXOwAJnL216VjbiR+9fcr/DFu2ylwsVJBYAkZiDMEjlMe1Z3ivwThnkrcdDy0Qr7AAn3oyxxapdksPmxu5Ps+VGuU443wG5hzr4kJgXAPCT0kEwexilGWuOUWnTPSjKMlaZyvV3LXYpeLGsjXalk/mlc/Do8X8AtBuOwoHiHtQEU7xFsEa0tezRktjA1drpSvRSmPCvCuxV1u2NMxInoJ/WtdGStluGuFVY9YA+/wC1H2MWUUKoBY9pgA7D1ml6rJ0B0MAcya9ceJAOuxPYcgefnSSXLR0Rm4KwjFXpdttzUbB1kgaddpqi4dQeoB/Q/aiLVsl4kQBJPIDczR6QqblKxngrM6wNddvqf2q3EY9F00Y7EKAfQtsPITSzFY+RkSQnX8zdz+1A0kYSk7ZaXkxiuMF+xo3E15WxHn+yio/1YPy6f6TH0IGvtS2rbC69gCT7fvAqtJHP9WUnTDLlwkaxp2H2qGcjSB6KKsu2SqLO5Uz76fQmqLg9DHvWjIGRNPYZYvnQQInXQe9GJc3BiOsClKA8/rRjtyB5D7D+elNYYvWw3+p0IIGg00H851bejdgnmwWFHLuaWq06fyKo4o//AJr+ceWg0obckrKPJxg21eyXEeIZyFGiLtoBJ5mBt5VXg7edtSFA3Y66dgNWPb3ga0JRGGBgx1/arqfFaOOnlnsf4fibWwUwy5M0BnIVrrf8yCFH+lR/yNBcQuw2Z9HYSS/jcxsSWnTeJorg2CbVyQAhBjXM0yAAdoka9N6J4nw1yC7gZn1jlAgCV9ABPSkl5Tbo9GPjcY2kC/DnEcQLjf06ZmfLJRARAnKCqiAJJ5b1urnEnIa3fVAp0dLhRhlO4KJLe4r59w/iDWC+xzo1siSGE/mXLsRqAZ61pcB/TBVKKGMSc7BoJ/8A1iANf7s1PGTa2cGaKcrDfhi0uHLqjF0dgyZYYKJJysSQ/wCY6lOe9aEXg3iOnL151jsLea9fED5R4Y0A6ERtrtWxtp4YOsDX96vj2rPA/k1GMlXbJAg7PHb/AL0Dxq7ftrmt2nvdQrKCPTKSaOVQdKDxGLa3trG45/5FPv0cOFR5K9mJPxfbzMl/DsAdGU5Tp0ZSBNZbi1jDkl8M5jnaeQ6/7SdHHacw71vfiLDW8XbJA/8AMUSI+bTkOvkfpXy1xB6965czl7PovFUauOv6vRya9NcqZAgayTMiDprprzrms7KIzXpr1co2GjRMn886DexTZErj2ZqrjYBE9qhmWn13DUE+CpXE1i6ijpp/NAIFSbCEVYkaHwyD4gSB6ie1JLQ+PZG20N3IIHmRp9YoWKIumDJKsTy109V0+tdyBsuwbc8gRP6R9aC1saX3a+Ck7L6//wBGrrzwMo5+I/8AxH6+tdvDM3hGkwI26n6mqXOv09qK2wN8U0cFSrgoixhmbXZebHb06mmbS7JxTk6RQBRWHJ2QRGpZtR5/4royLspP+ptvQDT71MPpr6Dl60jdlox4vsliL87knQCTue/byqsYkjQD3j6VW43nnsOelQQzpE/eikkhZTk5F9rKTLT1P/erCTMxv9ulcAAkLtzP1ryv6dT0FCxlGlTC8IFHjb5VEnuRyH09xSq9cLMWO7Ek+ZM1K7fLdhyHYbVVFPGLTtksuRSSiukemnXw3hRcLqSAVCsPKSD91HqKSxT/AOEA4xCsEZk1S4QCVVHESx2WDDa9KacZSi+IuCSjkTl0avBcMJRMrKqqGmRLEhjsNtdNe/ahviHitu2jj8RGuA5MoIzBupXXKAPfTrRHxBZuKgaziraBZkFgBrrmzqD7GsFxzh+JR8+IElxIeQ6uAAJDL6Dka5oYZf5SPVzeXGuMQD+p1n3oqxjWzSJ76wIOhk8qpw+CLkbgGPERKiefkPOhrlsozI0SCQQNpBjTqO9X32edJpdn0j4GxednbKFtoFXNuXuO0TPRV0A7zz00j4jI8chz/wBPL2+1fMPhnixtvkY+F8qjkFILFT6sdT+1bO/xJXZkmGXLP/JQVPqDHmDXbhacTwPOwSnk5Voe4uV1HnH7dKTYrGF9G0YbNsfJqA4zxJv6cOpKvaYCR0bwwRzB0BBpH/8AdAaGZY5MF5H+5Qdwem45GDo/OMXUieDxJNXQ4ZyrZhp1H/yFZD4nwmS8XAhbniHTN+Ye+v8AyFa6zcRwIaCdQD005bjegPiPC5rMZSxUjLlGYgnTYaxsPrypcvCeLkj0cMJ4snFmHAqUUScKQQoEud1GpHYxz+1FWuHE6MwB6Dxt6xoPevLlOKPWjhlLSQvtWizBRz/hqo1oblpLSNBIZhGbQtHPKNI/m9IHUTptQjPlY2XD9Ok+zXW1q8JQ1u4Jjnv6afuKLtmu1HMytrNVnDmmFtJolcOKZREErYWR3rP4m3DEVu0wetKuM8HzeJV8X0pZQ+DWZSKmHEQfLTeN67etlDDaGu/gmJifLWoNDptdEXu6QugiO56yf0qsVNFM6DUVL8MDc+g1NbSM+UtlYojXSeWw/m1cAjYR3NePn/3oN2NFUSRzqAAZEH76e1RuCIPIiZ7864hAIOuhminXw5l1WZ11g7EHvqPMQaHTKRXKL3sGW2TqKIgADMY78z+/81od8RyHv/jaqW11NGm+xOSh1sLbEA6xC6iOevM/WorfX+0nzOntFDKalRUULLI2Ta5OwA8h+tcFcArpqiRJu2af4J+Hf6prjtGS0sw0hXuEHIpOnh0loMxHWmPEv6gOEtWM4SACRksID/8AjAAU+f8A7W5hcK+Ilw2GW0qyzy7MWCL45A6kwABtuDQ5+JsykEkCYyrLeun80rc0tWUjjkldaNHZu5D/AOZcz6L4FS2IynNAeNBMHnB2I0gzGfENrE2msXLEAapGgDj5dVOmuhII0JrCX+PKpjI+uxIUT5Sa5a4qGBK6RvO48+VKp7C4HPjDgjYK+AjM1pxntkmHXXVHj8wMiecdjA+G4vdUQWzpzS4M6HsVeY9Ka4rGHHYO67Em5YbOh/N+EQgYewJ8xWWu23QlW15g6EEdQRv/AJrXW0Mtqn2MOJ/huq3LaBDOR0WcgMSjIDJAIDSJ3HehrmLcsGLHMFCTzKjaeukD0FVWWhWHWI8wf2n3roSlchZQVjZeJFrd21cPiKaNMyVKuFY9dIn03oLC4PQO+ibgc39OneicBw6RnYaDYHZj+wojEITqx/f/ABU8mVvVnTh8VRXJr8IoN0swJyjJLZjrlG5PQcu+1X2eIu2ZWDZGUqHJIeSNGXt2+tQRoUhFB18TNHLYzsBVD3e+Y8zHh9OvnUYt3o6JQVWztshRlXQc45/7jz+1EpoIAjegUcVct8fzWjKCoaE6O43CM7ZlgggbkCNNtaFuYVE38TddlHl186Ke+Op+1CXnB+YE+VKoyXvQs5Rbb9jexEiQP8Hfyps+EyDNMrp560mGlOsJiQyZGr0UeayaPAq+1eBoO5YK9xUrBp0xR3ZANEXrcLJFAYZ6a2yHUqeYiek1TtCswPxFhVcym/T9qUYFDmyM5Xvow9QdjTXjXCr2GckklCdHGs9uxpU7ZtoB+9cc+ysdIYYz8NHZGVmUZYuD5GzAaz+Xc6a7UvxWHZDsSvJh+tTt4sjRtQOf5u/Y024cxfS2wOn/AE2gE9ctsnxf8DtqRSpp6Y34M77/AHqUU5fh6P8AJCP03Q/qp9PSl2KtGyxS4BmAkAyVPScpBiO/7VqaB2DxVuHZpyq0ZtNdj0n151VhMflMvbV1J/2tG5AaI99e9aezwvC3LaOlxwCYdvmCTsxtkBoHMZtjmBO1Oly0B8ou0IMTZkZ1EDmOmuunKDofMdaFitfxThr4WGuhWW54SdWtvofEHHysR9zOkSjPDGJ8A8J1UsVUEf7iQD6UEnHRsji6a7fYtippbLEKoJJ0AAkk9gKd2/hi6wnPaA73Fn0A501t4V8MCUwyTt+JnW80ehhf/TTE0rBOG/Bl+4JLJb7M0t7DQe9OsN8ALbbNfvW3URCBigP+5iJjyI86S3+P4hZzO8HQ6R6AiBQNnipzEkHbUzrR5RNwZtuJ8SXDJkt2UReRtqpST/qXn518+43xZ3IUNuJYgAE9AI22P0qriHG3eUT5diepn8vSOveh8BwfEXTFtPM9PM0km5dFoxUewMoBqffc0MNTA51sbXwFdIl3HuB770LjeCJZIGZCegcsT+hpHCS20PyR3gV3I8TK3AUbowZcp89ZPpQ6WWv2baonjR2XQgFgyqdZiIIAE9YHSiMMQuZ22VSR5gSJ7f4qOBBZFCDxeGSTAOUsIJ5fm19aKk64oMYcnt1psWWbWYwN+Q/m1PsJwpVALnvlA1PryFV3uIIjv+EgYlmOdhyLHYDTnvVL8YY7iexJC+yxWaGxPHHcnsbYnEaaCABA5R70rxOI6ke/7UHd4mxM5EHTRz7AtQxxjAyMoPXKP1qThfSLvyk/ZbeuToW06R+lUM45E1V+OeinzUV3+oXTMg/4kr9yaPFo53kUn2WC55n7VM3NNwD7UPcAjMDI2iIIPQjaqie1DjZubjoJNwjnUGfv9aqRuXI1wxH850VoDlas1LLIqNliDV4XSqymtdREc4dyy61Bkg1DA3BFFlhToQ7YemNi7StmivDE0ykCjSOEdCrwQRGtfP8A4g4L+C2ZZKHbtTe7xLLvtSPG8adyQYybAUmRxaDGLsWFBEn25n9q5n6HLz0+mtRYyZqarzrkZeL9IsbFOikhiTEwTrtvP6Uqv4hnJZiSx3J9gAB2FHudetCYmzlgqQebAbLtAJ2ny2oq6DeylwRptzPqNPoaOw2IKEm2GUgLInN4dc2YRtOWOknrQ2GvANmIDQJAO09T18q5lIUmSSZ56983860yZjZ2uLh8McNf8MaKGWSpiUYActxpykUt4Liwqm22p1KiY1JPyt0nQjrEUpw1p7n5rxJ5qCddvl0n3FEnhtxVzQRlaMzAFc4/KwkxI5HpWuxeKo9i+JFX5DXUiQPUfw0QnGCR8seZ+wpTiWZ3lxDncwMrd9OdWFa2wNpE8XxWdC09htS6/jS2mgFFfhCuYg5WyiCIEyOcaig0xotMERSBP2n9K1/Cfia8iZArSNsyAb9wNY136is5hkM5gSPKNKKt4th8zMe8DbvFGLcdoLVjvF8SvOfG4Aj5SSxB7RoKWYm+o1Y7cz+gFCX8eNY1PI/sP3oBkZvET21ms5t9m4luIxruMvyr0G586fXCRg/FoXuoQNiFVHAB9z70mwKBTMajmfvT/iIH9LbMyz3Cx7BQygfrQXYW/tYhIrkUVawjurMqlgkZo1IzTBjcjQ1RFOqObZUzGIkxvHKfKq4q1lrmWs0FFDLUZImCddD3HQ9avdKqKUrGRxTCnWJI+k1E1J25chXFHtSj96PA8+f81qBqTGuTH6fvWC2a5HohFmgbTwR/NKapZgAgyDV0TZ1LcVe+ldCyKruKacUlmoFuIJmK6g7a7UQQaR4uyZJoNtGCeJmV3pK4/wACrXdoidKpVfeoydsdEkMefX9q4T5+9SRR1mPby710mI08/f7UqWxm9FN4HYe5ry2S0FjMbCIHtFXA12adRYjkjj2xEb1R/TgDSaIr1HiJyYRgeHwpuJd8Ynw5T6gjefQjfbSZ4LjLx+EzAJ/ZlUKfIRFVYfEMkxBB3BGhiY13G51BFXutq7o4huRBAb0MZW8jBqMuUXvr5OqCjk6dP49EL2GR/lMT+Q7f8Sfsfep4TBI5CM+TWCzREkeEnbTdSepU8zSq8mQ5M7iDoSPuDqPrTfhbW8suzFho2xUqdJIjUfYx2oOaSsfHhcpcXX7Ksdwe7bklcyj8y6iOp5ikhaWNa/g75bmRbgKH5QZIHYf2+2tX8S4LbcyVhv7lgH15Go5PKUZJSR2Y/wCPWSLlie+qb/6MkH8PnVDvHn1B5UbxTAtaMfMvJoj0YcjSwmavGakricU8cscnGSpnSPfy9gKLVCBr/geVV4O3JLdNB586JuGI8496bjqyTnviAvf8WXYfWnH4+dFUfKpMHrmj9qWX8GT4xtIDdp0B8uX/AHop7gEIugGhNaHdsEr6Q34FdZXdFMF0Mf7k8Y+isPWi8Rhbd3UxbuczHgY/6hyPf70nwd8q6Ox2In/bsR/6dKbu2VijagErPMQY06jtUM1wlyj7O7wowyQcJK6YkxmGe2cjiATI5qY5g89/rQ0VobjlRBi5bPI7D9VNLMTgxBa2ZA1KH5lH/wAhVIZk/wDIhn8SUNx2v9gLmqblTNSsWS7BRuatVnKC5a5qa09rg6geLU1EYJBsIo8ApmadCNT7VWELHQSafPgEzSxLHpyq1UUbAD6UvEz2dU0zwOKK6cqTo1FWX/71RMDQ+t3ATIqxmBpbhrsUYjinQrRYyUFiMLNHrUws0aAZTE4Yg0GbUAmtq+AVtxQrcG10Eidewg69+Q9aRwDZmHRCiOmn5HXmHAGvkw1qeFsBzEwaZvwHIW6GI7VVhuGMH061ox+QSfwcu8EdRMg0A9lhuDX07gluVAcCRXfiHhaC2Xy7bgdKo0idny0KIMzOkdO81xjB0HvrP7Ua+FY6hYH0qvEqFOup6do0mpZFRbGrTZSyryOmpk6QOVRRR0nv18h+9eVMxljoPaegrxcnsKi2+iqS7o412RldQy8gdCv+1tx9u1WYFLCMCGur1BCspB3BjcelDmuGQM0AwQNdpMxPXbahLEmvj8Bx+ROMk9P8mtwD4MtErmaIDZk57rmAGvUdKcYi4sQRy5kk+/Ovl112YlmOYnUnmaO4dxq7b8IYMv8AY+o9OYPka4s3juXu/wAnreP/ACEYv7opf2jT43JOUsAG0h9AT0zHSfagrvCEy5WXb5SdGA7MNx5zUBxGxiFyt4GO6ufCT/pfkek0GVxOH8Kkun9p8Sx5cvMVGMJx0nT+GdmTNjyfc48l8rtfk9/4Xk0VtCZAfw7jbN8vqYobiWGZAuYRm2/waZ4bEZlLr8uzIdlPTt51y8vhOU5k5oQGg9wfvXRHyZR+2SOTJ/G45rnidWK+H2i5e2CxBRmE75kGdeZiSI3obCAMew+1OcDZUOGtyrb5Z2IG6E6kb+EyR3G0uL3Ee5mRApKjPGxfUkxttB9a68clN6PKzY5Y7UuwRzIjp+v3puBnZGOzhSfNfC/1U+9J2Pb/AD/P0orBYj8h75ex6ev83rZ4tr8G8PIoT370SzlXYA6qxHsY16io3WysrrpOsfceVSxJAvMepBPYMAT96uVgWAMbgGRMwFH71zOG1Xs9GGW0+XaYBdwBLnIPCYOvKRMelMuGcMVSHadNuVNUs84qF4xXdFUlZ5s4pydHr9wbAUuuzRF27pQFwk0zkJxog0Cq2NcdgO5od3JpWw0SttRSOKXq2tXo9ZMShnZejrb0nt3KKt3TVEwNDlHqy29LVuValymsWh3ZIosRSWxiKMt4mmsWg0WVO9Wphk6UEMUBRFq/NYwysgCmKXJEEAjodqUJcoq1coNCNBN7CIyxkUc9ABrXzT4k4dlukKN9vM19MW7QON4dbuMHI1HpQatBi6Z8txNoJ4Rrl0nlPOhShNfS8X8PJBIQbUmvcCCDMEn61P6aXRVzcmZjC8LZwYHIn0G5pRjrozZVMqunmfzEef6CmPHuIOlxQhICjWNJzCCO+lIpqUn6KxjWySmrPww1UA/5pqcGAmYMNRSMqlYqiNDt1pjgOJPb8Myv9rar6dPSgHEVxjHpt5UkoqWmPCcoO4umaWxjrLNP/TY6EH5W7ZuX/L3ruJtOjBx7aEEenzDvWYcztR3Cce6NlmVbZTqs9IO09u1Qlga3F/pndi8+/tyL9rscXMMG8SbjUr+qn+cu0ywuLBcFgguA/M6go/Iq6nQHlPvB1qK4xNGAKMDm3zLI6aSBvIM70acOmJQOoCXCJy/lYcj7e3OtDnjfJIrKWHN9knb9Me/+HYbErohs3Buq6HzCnRl7iO8VmsZwhkZlQh41IGjxMSUOsdxI71RZxrW2yXMwy6Bvzp5EfMv8FPblxMQoV2UsPldGUMD1ldVPeI6jnXR9a1f+jkn40U+LVP01/wCiVMK7mY1gAnmYECfpR+H4ec4zgxqZ5bnn6/SgcTxS9hbpS4RdA2bQNHmNDEHfpvTTAfEFq7oGhv7W0P8An0oqUZUyShKLa9v/AJGItwI6UNfIG8VHiOMypKwSSAPWkHEb5DBiZnSKo5fAFFLsOv4leWtBviJ5ULbuk77xPoa8xopshJJnmFdAFRiulKwrYKnKd6jaxOpB6/SrKDxIhpBg1mKNkolDSfDYokgH/I0pkr08WK0Ho9Wq9L1uVej01gD0erPxaDVxVeJZihC78qNgoZW7xnWmNm/Wawd1wvj3/Sj7d7vRUgND9cVViY6KTJdqRuUeQOJo14gsSTGw9zA+tGW7k1j0xRUgRI68qbWMbNHkh1iHt3FQKB/qCdN55VWGzVbaQCg5Ui2Lx7ZiPjbgRz57YOU7xMaDb1rDq0aV9uxdkOhU9D7nSvn/ABX4ZClm2GpqMoXtFMqUGZVBRC3Y8PLl+oqFxMulDM9SeiaZZdfWoMagWrgpQliKa6RGuv2q6y6896qukUTDW4cwBU6vC9YJMH6U+tWoiNI29Kz3BXQHM7ABdRJgSRFP04jbIkGewifqaaHWwTf3WgvE4VL6Q5CuPlbr6/ofpWdx/A7ts6rmHVdfpv7SKanjFr+77fvV9rjFuI/EX/aQSPtpUp4a3B/o7MfmX9uRX/fsyTKTzmNBrOnShbiVrcRdwt06nI3935ff9waV4/g7qMyw6nYr/jQ+hqKbTp6OmXDJG4uznCuMAZUvaqD4W5jlr186M426AgAS0SG5ZTvHWsvcUgwaLwmOgZHGZP8A3Keqn9KtF0ccn6ZNb5Vgen1HSmgIIkc9aVXcKZGU5lb5XGx6z0I6U3w8RHTT2q0ZJnM4ySdnVWpGp1S7VQQDrjW8w2mvTRdvHEbIg7QSI8iaXXswvGHytIPmN6JV6LsY5VBzJbJ5LlmdOv8APWq2x5nNktzM6Kf3o0l7AQV6vtk/wgfeqbmKzRKIB/pBX3g61evESvyKoA20PSZOu8ftRTRi1mIiee1eW5VRxxbdU88sH3BnnVefsB5T+po2Cgs3dakt6g81ezVrAN7V+iA9JLd0ii1xVGwpB7PpU8Pdpab2lTS7QodSo0VrFCKKTEdDWbS/RdjEU1DRytMfC/Q+MtrdUoxieYoBcRU1v0y0JObkZTjfw69sZklx25VlnDKYYQe+lfVHxGnak/EOGpc3AE1OeNPoEZV2YGa6K0eO+G4/6bctj150lxOAuJuB7ioSi4lFJMqRqmzVSlSZooWELweGa5KqNdDJMADYz7/SnGA4IVMu+vRdvc0v4BjMtwLHzQJ5jfbzMVqWWnikJLsCbg9v38qrHwz+IyrbLFmOVVWDJ/nOjmJojCY422zATKsh5HKwKtB5GDv9xpTNIUExP/0+u2w5e6qxAQ6MjvlLFM4YZWAHQ8+QJpXawGKtAOsshjRQWBnaUiGPONTHKtPxbj5uW3VbaoLgtqxG2W0SyBQAIMnVjJgACBpSq7xIlQhUHQAnQEqCxiYkTnfn+c+VI4pqmNGTi7Rfivh5rttXZVVi2UMouQTIH5l0PbXt0rN4z4XvoM0IZYIqq6s7FioWFB5519602J+JHKBfwwpBQyG08LW2AygfL4Np0k1B/igsFUoFClCrKz5lyGANZkbj2PKo/Tcdrr4OpZPqVGXfyI8PwfE2SpH4bLckAfiJlMZtdTpopM9N4OxD4V18armSAxZIdQpLCcySIlWE9VIMURiuIsgTKlslCSrZQGg55ykAR/1Oe8UowHxG9ucym4/iGZmHyun4eXUEgDUjKV3MyIjRae0CcZYvtmtDVMFcMyuTLlk3CLfzZgsZ4mcre1D3bLqJZGABKyVIGYEgrO0gg6dqMs8bW9bYG3MuXZcxEEs7nWNVlzpoe9exXEi6MhRQzkMzCPmDO+gifzkQWI0ERrN4y5HPJNdn/9k=" class="card-img-top" alt="...">

        <h5 class="card-title">Card title</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>

    </div>
</div>
<div class="card" style="width: 18rem;">
    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWFRgWFhYYGRgaHBwYHBgaHBoYGBwYGBgZGhgcGhocIy4lHCErIRoYJjgmKy8xNTU1GiQ7QDszPy40NTEBDAwMEA8QHhISHzQrJCw0NDQ2NDQ0NDQ0PTQ0NDQ0NjQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NP/AABEIAK8BIAMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAAEBQIDBgEAB//EAD8QAAIBAgQEBAQFAwMCBQUAAAECEQADBBIhMQVBUWEicYGRBjKhsRNCwdHwFFLhYnKCM/EVI5KiwgcWU2Oy/8QAGgEAAwEBAQEAAAAAAAAAAAAAAQIDAAQFBv/EACkRAAICAgICAQQCAgMAAAAAAAABAhEDIRIxBEFREyJxgQVhMqGRscH/2gAMAwEAAhEDEQA/APkteqRQ1zKafixDldruWvZaFMx4VIVzLVjanQQOm8etMkzBWCsBjLfKN+/anD3BDNIWeQGpMQNfIctKG4WQFQkSoLFukwAoPt9aNdc7llEyfADsAAJJ7Coyu9o78MUo69izU6ZSSfT2qy2xQnLq0QTyWe/M0RjAEMZiTEkgR6ATQN68TpGg61knL0CTjD3sYWGJgxrG52Uf6V3J7mo3ewk9yJ/YelUWUOQqfzEECRoBz160ZbwpjWe0wTQ4NMdSc1QKi+S951+mvtFWqyjoT30H/pEk+prt1OUr5afqagwjckeUA1RQbJOol4GbdjHYBV9yfvVyMi7z5jX7iqbVlWEKxndjGYwO+1RCAmFMR/dz76UVH0LJuO6QWAJ5x+49IqxbY3Gh9wR/OVU2DqNf19utE22Ekz2PLy1qnHRoyTeyu6gdAjaQZU7kb6HqNTVdrgM7uI7DX6kRRjBAdQeXSNee8VTxDEIkKiKXgEs2oE7ALsT51o8ukGccdcp060CX+EqssXVEGm+dj7bntSu7lnwgxync9z0q++7vLsSwGk8h0A5DyFUBK6oRl7Z52WUW/tVIriuFaMsYRmIVQSx2A3NP8R8IPbRXvXbVoNqA7eKOy7t/xBq/00v8mQUrdIyDrVbCvofBvgG3iFzpjA6AkMqWyryBMDOwCz1IihOPfA4w6tduXltpICKivfYnkC5CKWMTOgqEuLlxTKbXZhYqYw7HLAJzGFA1JMgaDzMU+4L8OnEo5Sc6MmnJkeQSO6wSe09K+i4b4es2GDKssqhEn8oE5iO7FmJPeK30l7IZfKjj/JiOH/CrWbb4i+BmRSy2t/EwyoXOwAJnL216VjbiR+9fcr/DFu2ylwsVJBYAkZiDMEjlMe1Z3ivwThnkrcdDy0Qr7AAn3oyxxapdksPmxu5Ps+VGuU443wG5hzr4kJgXAPCT0kEwexilGWuOUWnTPSjKMlaZyvV3LXYpeLGsjXalk/mlc/Do8X8AtBuOwoHiHtQEU7xFsEa0tezRktjA1drpSvRSmPCvCuxV1u2NMxInoJ/WtdGStluGuFVY9YA+/wC1H2MWUUKoBY9pgA7D1ml6rJ0B0MAcya9ceJAOuxPYcgefnSSXLR0Rm4KwjFXpdttzUbB1kgaddpqi4dQeoB/Q/aiLVsl4kQBJPIDczR6QqblKxngrM6wNddvqf2q3EY9F00Y7EKAfQtsPITSzFY+RkSQnX8zdz+1A0kYSk7ZaXkxiuMF+xo3E15WxHn+yio/1YPy6f6TH0IGvtS2rbC69gCT7fvAqtJHP9WUnTDLlwkaxp2H2qGcjSB6KKsu2SqLO5Uz76fQmqLg9DHvWjIGRNPYZYvnQQInXQe9GJc3BiOsClKA8/rRjtyB5D7D+elNYYvWw3+p0IIGg00H851bejdgnmwWFHLuaWq06fyKo4o//AJr+ceWg0obckrKPJxg21eyXEeIZyFGiLtoBJ5mBt5VXg7edtSFA3Y66dgNWPb3ga0JRGGBgx1/arqfFaOOnlnsf4fibWwUwy5M0BnIVrrf8yCFH+lR/yNBcQuw2Z9HYSS/jcxsSWnTeJorg2CbVyQAhBjXM0yAAdoka9N6J4nw1yC7gZn1jlAgCV9ABPSkl5Tbo9GPjcY2kC/DnEcQLjf06ZmfLJRARAnKCqiAJJ5b1urnEnIa3fVAp0dLhRhlO4KJLe4r59w/iDWC+xzo1siSGE/mXLsRqAZ61pcB/TBVKKGMSc7BoJ/8A1iANf7s1PGTa2cGaKcrDfhi0uHLqjF0dgyZYYKJJysSQ/wCY6lOe9aEXg3iOnL151jsLea9fED5R4Y0A6ERtrtWxtp4YOsDX96vj2rPA/k1GMlXbJAg7PHb/AL0Dxq7ftrmt2nvdQrKCPTKSaOVQdKDxGLa3trG45/5FPv0cOFR5K9mJPxfbzMl/DsAdGU5Tp0ZSBNZbi1jDkl8M5jnaeQ6/7SdHHacw71vfiLDW8XbJA/8AMUSI+bTkOvkfpXy1xB6965czl7PovFUauOv6vRya9NcqZAgayTMiDprprzrms7KIzXpr1co2GjRMn886DexTZErj2ZqrjYBE9qhmWn13DUE+CpXE1i6ijpp/NAIFSbCEVYkaHwyD4gSB6ie1JLQ+PZG20N3IIHmRp9YoWKIumDJKsTy109V0+tdyBsuwbc8gRP6R9aC1saX3a+Ck7L6//wBGrrzwMo5+I/8AxH6+tdvDM3hGkwI26n6mqXOv09qK2wN8U0cFSrgoixhmbXZebHb06mmbS7JxTk6RQBRWHJ2QRGpZtR5/4royLspP+ptvQDT71MPpr6Dl60jdlox4vsliL87knQCTue/byqsYkjQD3j6VW43nnsOelQQzpE/eikkhZTk5F9rKTLT1P/erCTMxv9ulcAAkLtzP1ryv6dT0FCxlGlTC8IFHjb5VEnuRyH09xSq9cLMWO7Ek+ZM1K7fLdhyHYbVVFPGLTtksuRSSiukemnXw3hRcLqSAVCsPKSD91HqKSxT/AOEA4xCsEZk1S4QCVVHESx2WDDa9KacZSi+IuCSjkTl0avBcMJRMrKqqGmRLEhjsNtdNe/ahviHitu2jj8RGuA5MoIzBupXXKAPfTrRHxBZuKgaziraBZkFgBrrmzqD7GsFxzh+JR8+IElxIeQ6uAAJDL6Dka5oYZf5SPVzeXGuMQD+p1n3oqxjWzSJ76wIOhk8qpw+CLkbgGPERKiefkPOhrlsozI0SCQQNpBjTqO9X32edJpdn0j4GxednbKFtoFXNuXuO0TPRV0A7zz00j4jI8chz/wBPL2+1fMPhnixtvkY+F8qjkFILFT6sdT+1bO/xJXZkmGXLP/JQVPqDHmDXbhacTwPOwSnk5Voe4uV1HnH7dKTYrGF9G0YbNsfJqA4zxJv6cOpKvaYCR0bwwRzB0BBpH/8AdAaGZY5MF5H+5Qdwem45GDo/OMXUieDxJNXQ4ZyrZhp1H/yFZD4nwmS8XAhbniHTN+Ye+v8AyFa6zcRwIaCdQD005bjegPiPC5rMZSxUjLlGYgnTYaxsPrypcvCeLkj0cMJ4snFmHAqUUScKQQoEud1GpHYxz+1FWuHE6MwB6Dxt6xoPevLlOKPWjhlLSQvtWizBRz/hqo1oblpLSNBIZhGbQtHPKNI/m9IHUTptQjPlY2XD9Ok+zXW1q8JQ1u4Jjnv6afuKLtmu1HMytrNVnDmmFtJolcOKZREErYWR3rP4m3DEVu0wetKuM8HzeJV8X0pZQ+DWZSKmHEQfLTeN67etlDDaGu/gmJifLWoNDptdEXu6QugiO56yf0qsVNFM6DUVL8MDc+g1NbSM+UtlYojXSeWw/m1cAjYR3NePn/3oN2NFUSRzqAAZEH76e1RuCIPIiZ7864hAIOuhminXw5l1WZ11g7EHvqPMQaHTKRXKL3sGW2TqKIgADMY78z+/81od8RyHv/jaqW11NGm+xOSh1sLbEA6xC6iOevM/WorfX+0nzOntFDKalRUULLI2Ta5OwA8h+tcFcArpqiRJu2af4J+Hf6prjtGS0sw0hXuEHIpOnh0loMxHWmPEv6gOEtWM4SACRksID/8AjAAU+f8A7W5hcK+Ilw2GW0qyzy7MWCL45A6kwABtuDQ5+JsykEkCYyrLeun80rc0tWUjjkldaNHZu5D/AOZcz6L4FS2IynNAeNBMHnB2I0gzGfENrE2msXLEAapGgDj5dVOmuhII0JrCX+PKpjI+uxIUT5Sa5a4qGBK6RvO48+VKp7C4HPjDgjYK+AjM1pxntkmHXXVHj8wMiecdjA+G4vdUQWzpzS4M6HsVeY9Ka4rGHHYO67Em5YbOh/N+EQgYewJ8xWWu23QlW15g6EEdQRv/AJrXW0Mtqn2MOJ/huq3LaBDOR0WcgMSjIDJAIDSJ3HehrmLcsGLHMFCTzKjaeukD0FVWWhWHWI8wf2n3roSlchZQVjZeJFrd21cPiKaNMyVKuFY9dIn03oLC4PQO+ibgc39OneicBw6RnYaDYHZj+wojEITqx/f/ABU8mVvVnTh8VRXJr8IoN0swJyjJLZjrlG5PQcu+1X2eIu2ZWDZGUqHJIeSNGXt2+tQRoUhFB18TNHLYzsBVD3e+Y8zHh9OvnUYt3o6JQVWztshRlXQc45/7jz+1EpoIAjegUcVct8fzWjKCoaE6O43CM7ZlgggbkCNNtaFuYVE38TddlHl186Ke+Op+1CXnB+YE+VKoyXvQs5Rbb9jexEiQP8Hfyps+EyDNMrp560mGlOsJiQyZGr0UeayaPAq+1eBoO5YK9xUrBp0xR3ZANEXrcLJFAYZ6a2yHUqeYiek1TtCswPxFhVcym/T9qUYFDmyM5Xvow9QdjTXjXCr2GckklCdHGs9uxpU7ZtoB+9cc+ysdIYYz8NHZGVmUZYuD5GzAaz+Xc6a7UvxWHZDsSvJh+tTt4sjRtQOf5u/Y024cxfS2wOn/AE2gE9ctsnxf8DtqRSpp6Y34M77/AHqUU5fh6P8AJCP03Q/qp9PSl2KtGyxS4BmAkAyVPScpBiO/7VqaB2DxVuHZpyq0ZtNdj0n151VhMflMvbV1J/2tG5AaI99e9aezwvC3LaOlxwCYdvmCTsxtkBoHMZtjmBO1Oly0B8ou0IMTZkZ1EDmOmuunKDofMdaFitfxThr4WGuhWW54SdWtvofEHHysR9zOkSjPDGJ8A8J1UsVUEf7iQD6UEnHRsji6a7fYtippbLEKoJJ0AAkk9gKd2/hi6wnPaA73Fn0A501t4V8MCUwyTt+JnW80ehhf/TTE0rBOG/Bl+4JLJb7M0t7DQe9OsN8ALbbNfvW3URCBigP+5iJjyI86S3+P4hZzO8HQ6R6AiBQNnipzEkHbUzrR5RNwZtuJ8SXDJkt2UReRtqpST/qXn518+43xZ3IUNuJYgAE9AI22P0qriHG3eUT5diepn8vSOveh8BwfEXTFtPM9PM0km5dFoxUewMoBqffc0MNTA51sbXwFdIl3HuB770LjeCJZIGZCegcsT+hpHCS20PyR3gV3I8TK3AUbowZcp89ZPpQ6WWv2baonjR2XQgFgyqdZiIIAE9YHSiMMQuZ22VSR5gSJ7f4qOBBZFCDxeGSTAOUsIJ5fm19aKk64oMYcnt1psWWbWYwN+Q/m1PsJwpVALnvlA1PryFV3uIIjv+EgYlmOdhyLHYDTnvVL8YY7iexJC+yxWaGxPHHcnsbYnEaaCABA5R70rxOI6ke/7UHd4mxM5EHTRz7AtQxxjAyMoPXKP1qThfSLvyk/ZbeuToW06R+lUM45E1V+OeinzUV3+oXTMg/4kr9yaPFo53kUn2WC55n7VM3NNwD7UPcAjMDI2iIIPQjaqie1DjZubjoJNwjnUGfv9aqRuXI1wxH850VoDlas1LLIqNliDV4XSqymtdREc4dyy61Bkg1DA3BFFlhToQ7YemNi7StmivDE0ykCjSOEdCrwQRGtfP8A4g4L+C2ZZKHbtTe7xLLvtSPG8adyQYybAUmRxaDGLsWFBEn25n9q5n6HLz0+mtRYyZqarzrkZeL9IsbFOikhiTEwTrtvP6Uqv4hnJZiSx3J9gAB2FHudetCYmzlgqQebAbLtAJ2ny2oq6DeylwRptzPqNPoaOw2IKEm2GUgLInN4dc2YRtOWOknrQ2GvANmIDQJAO09T18q5lIUmSSZ56983860yZjZ2uLh8McNf8MaKGWSpiUYActxpykUt4Liwqm22p1KiY1JPyt0nQjrEUpw1p7n5rxJ5qCddvl0n3FEnhtxVzQRlaMzAFc4/KwkxI5HpWuxeKo9i+JFX5DXUiQPUfw0QnGCR8seZ+wpTiWZ3lxDncwMrd9OdWFa2wNpE8XxWdC09htS6/jS2mgFFfhCuYg5WyiCIEyOcaig0xotMERSBP2n9K1/Cfia8iZArSNsyAb9wNY136is5hkM5gSPKNKKt4th8zMe8DbvFGLcdoLVjvF8SvOfG4Aj5SSxB7RoKWYm+o1Y7cz+gFCX8eNY1PI/sP3oBkZvET21ms5t9m4luIxruMvyr0G586fXCRg/FoXuoQNiFVHAB9z70mwKBTMajmfvT/iIH9LbMyz3Cx7BQygfrQXYW/tYhIrkUVawjurMqlgkZo1IzTBjcjQ1RFOqObZUzGIkxvHKfKq4q1lrmWs0FFDLUZImCddD3HQ9avdKqKUrGRxTCnWJI+k1E1J25chXFHtSj96PA8+f81qBqTGuTH6fvWC2a5HohFmgbTwR/NKapZgAgyDV0TZ1LcVe+ldCyKruKacUlmoFuIJmK6g7a7UQQaR4uyZJoNtGCeJmV3pK4/wACrXdoidKpVfeoydsdEkMefX9q4T5+9SRR1mPby710mI08/f7UqWxm9FN4HYe5ry2S0FjMbCIHtFXA12adRYjkjj2xEb1R/TgDSaIr1HiJyYRgeHwpuJd8Ynw5T6gjefQjfbSZ4LjLx+EzAJ/ZlUKfIRFVYfEMkxBB3BGhiY13G51BFXutq7o4huRBAb0MZW8jBqMuUXvr5OqCjk6dP49EL2GR/lMT+Q7f8Sfsfep4TBI5CM+TWCzREkeEnbTdSepU8zSq8mQ5M7iDoSPuDqPrTfhbW8suzFho2xUqdJIjUfYx2oOaSsfHhcpcXX7Ksdwe7bklcyj8y6iOp5ikhaWNa/g75bmRbgKH5QZIHYf2+2tX8S4LbcyVhv7lgH15Go5PKUZJSR2Y/wCPWSLlie+qb/6MkH8PnVDvHn1B5UbxTAtaMfMvJoj0YcjSwmavGakricU8cscnGSpnSPfy9gKLVCBr/geVV4O3JLdNB586JuGI8496bjqyTnviAvf8WXYfWnH4+dFUfKpMHrmj9qWX8GT4xtIDdp0B8uX/AHop7gEIugGhNaHdsEr6Q34FdZXdFMF0Mf7k8Y+isPWi8Rhbd3UxbuczHgY/6hyPf70nwd8q6Ox2In/bsR/6dKbu2VijagErPMQY06jtUM1wlyj7O7wowyQcJK6YkxmGe2cjiATI5qY5g89/rQ0VobjlRBi5bPI7D9VNLMTgxBa2ZA1KH5lH/wAhVIZk/wDIhn8SUNx2v9gLmqblTNSsWS7BRuatVnKC5a5qa09rg6geLU1EYJBsIo8ApmadCNT7VWELHQSafPgEzSxLHpyq1UUbAD6UvEz2dU0zwOKK6cqTo1FWX/71RMDQ+t3ATIqxmBpbhrsUYjinQrRYyUFiMLNHrUws0aAZTE4Yg0GbUAmtq+AVtxQrcG10Eidewg69+Q9aRwDZmHRCiOmn5HXmHAGvkw1qeFsBzEwaZvwHIW6GI7VVhuGMH061ox+QSfwcu8EdRMg0A9lhuDX07gluVAcCRXfiHhaC2Xy7bgdKo0idny0KIMzOkdO81xjB0HvrP7Ua+FY6hYH0qvEqFOup6do0mpZFRbGrTZSyryOmpk6QOVRRR0nv18h+9eVMxljoPaegrxcnsKi2+iqS7o412RldQy8gdCv+1tx9u1WYFLCMCGur1BCspB3BjcelDmuGQM0AwQNdpMxPXbahLEmvj8Bx+ROMk9P8mtwD4MtErmaIDZk57rmAGvUdKcYi4sQRy5kk+/Ovl112YlmOYnUnmaO4dxq7b8IYMv8AY+o9OYPka4s3juXu/wAnreP/ACEYv7opf2jT43JOUsAG0h9AT0zHSfagrvCEy5WXb5SdGA7MNx5zUBxGxiFyt4GO6ufCT/pfkek0GVxOH8Kkun9p8Sx5cvMVGMJx0nT+GdmTNjyfc48l8rtfk9/4Xk0VtCZAfw7jbN8vqYobiWGZAuYRm2/waZ4bEZlLr8uzIdlPTt51y8vhOU5k5oQGg9wfvXRHyZR+2SOTJ/G45rnidWK+H2i5e2CxBRmE75kGdeZiSI3obCAMew+1OcDZUOGtyrb5Z2IG6E6kb+EyR3G0uL3Ee5mRApKjPGxfUkxttB9a68clN6PKzY5Y7UuwRzIjp+v3puBnZGOzhSfNfC/1U+9J2Pb/AD/P0orBYj8h75ex6ev83rZ4tr8G8PIoT370SzlXYA6qxHsY16io3WysrrpOsfceVSxJAvMepBPYMAT96uVgWAMbgGRMwFH71zOG1Xs9GGW0+XaYBdwBLnIPCYOvKRMelMuGcMVSHadNuVNUs84qF4xXdFUlZ5s4pydHr9wbAUuuzRF27pQFwk0zkJxog0Cq2NcdgO5od3JpWw0SttRSOKXq2tXo9ZMShnZejrb0nt3KKt3TVEwNDlHqy29LVuValymsWh3ZIosRSWxiKMt4mmsWg0WVO9Wphk6UEMUBRFq/NYwysgCmKXJEEAjodqUJcoq1coNCNBN7CIyxkUc9ABrXzT4k4dlukKN9vM19MW7QON4dbuMHI1HpQatBi6Z8txNoJ4Rrl0nlPOhShNfS8X8PJBIQbUmvcCCDMEn61P6aXRVzcmZjC8LZwYHIn0G5pRjrozZVMqunmfzEef6CmPHuIOlxQhICjWNJzCCO+lIpqUn6KxjWySmrPww1UA/5pqcGAmYMNRSMqlYqiNDt1pjgOJPb8Myv9rar6dPSgHEVxjHpt5UkoqWmPCcoO4umaWxjrLNP/TY6EH5W7ZuX/L3ruJtOjBx7aEEenzDvWYcztR3Cce6NlmVbZTqs9IO09u1Qlga3F/pndi8+/tyL9rscXMMG8SbjUr+qn+cu0ywuLBcFgguA/M6go/Iq6nQHlPvB1qK4xNGAKMDm3zLI6aSBvIM70acOmJQOoCXCJy/lYcj7e3OtDnjfJIrKWHN9knb9Me/+HYbErohs3Buq6HzCnRl7iO8VmsZwhkZlQh41IGjxMSUOsdxI71RZxrW2yXMwy6Bvzp5EfMv8FPblxMQoV2UsPldGUMD1ldVPeI6jnXR9a1f+jkn40U+LVP01/wCiVMK7mY1gAnmYECfpR+H4ec4zgxqZ5bnn6/SgcTxS9hbpS4RdA2bQNHmNDEHfpvTTAfEFq7oGhv7W0P8An0oqUZUyShKLa9v/AJGItwI6UNfIG8VHiOMypKwSSAPWkHEb5DBiZnSKo5fAFFLsOv4leWtBviJ5ULbuk77xPoa8xopshJJnmFdAFRiulKwrYKnKd6jaxOpB6/SrKDxIhpBg1mKNkolDSfDYokgH/I0pkr08WK0Ho9Wq9L1uVej01gD0erPxaDVxVeJZihC78qNgoZW7xnWmNm/Wawd1wvj3/Sj7d7vRUgND9cVViY6KTJdqRuUeQOJo14gsSTGw9zA+tGW7k1j0xRUgRI68qbWMbNHkh1iHt3FQKB/qCdN55VWGzVbaQCg5Ui2Lx7ZiPjbgRz57YOU7xMaDb1rDq0aV9uxdkOhU9D7nSvn/ABX4ZClm2GpqMoXtFMqUGZVBRC3Y8PLl+oqFxMulDM9SeiaZZdfWoMagWrgpQliKa6RGuv2q6y6896qukUTDW4cwBU6vC9YJMH6U+tWoiNI29Kz3BXQHM7ABdRJgSRFP04jbIkGewifqaaHWwTf3WgvE4VL6Q5CuPlbr6/ofpWdx/A7ts6rmHVdfpv7SKanjFr+77fvV9rjFuI/EX/aQSPtpUp4a3B/o7MfmX9uRX/fsyTKTzmNBrOnShbiVrcRdwt06nI3935ff9waV4/g7qMyw6nYr/jQ+hqKbTp6OmXDJG4uznCuMAZUvaqD4W5jlr186M426AgAS0SG5ZTvHWsvcUgwaLwmOgZHGZP8A3Keqn9KtF0ccn6ZNb5Vgen1HSmgIIkc9aVXcKZGU5lb5XGx6z0I6U3w8RHTT2q0ZJnM4ySdnVWpGp1S7VQQDrjW8w2mvTRdvHEbIg7QSI8iaXXswvGHytIPmN6JV6LsY5VBzJbJ5LlmdOv8APWq2x5nNktzM6Kf3o0l7AQV6vtk/wgfeqbmKzRKIB/pBX3g61evESvyKoA20PSZOu8ftRTRi1mIiee1eW5VRxxbdU88sH3BnnVefsB5T+po2Cgs3dakt6g81ezVrAN7V+iA9JLd0ii1xVGwpB7PpU8Pdpab2lTS7QodSo0VrFCKKTEdDWbS/RdjEU1DRytMfC/Q+MtrdUoxieYoBcRU1v0y0JObkZTjfw69sZklx25VlnDKYYQe+lfVHxGnak/EOGpc3AE1OeNPoEZV2YGa6K0eO+G4/6bctj150lxOAuJuB7ioSi4lFJMqRqmzVSlSZooWELweGa5KqNdDJMADYz7/SnGA4IVMu+vRdvc0v4BjMtwLHzQJ5jfbzMVqWWnikJLsCbg9v38qrHwz+IyrbLFmOVVWDJ/nOjmJojCY422zATKsh5HKwKtB5GDv9xpTNIUExP/0+u2w5e6qxAQ6MjvlLFM4YZWAHQ8+QJpXawGKtAOsshjRQWBnaUiGPONTHKtPxbj5uW3VbaoLgtqxG2W0SyBQAIMnVjJgACBpSq7xIlQhUHQAnQEqCxiYkTnfn+c+VI4pqmNGTi7Rfivh5rttXZVVi2UMouQTIH5l0PbXt0rN4z4XvoM0IZYIqq6s7FioWFB5519602J+JHKBfwwpBQyG08LW2AygfL4Np0k1B/igsFUoFClCrKz5lyGANZkbj2PKo/Tcdrr4OpZPqVGXfyI8PwfE2SpH4bLckAfiJlMZtdTpopM9N4OxD4V18armSAxZIdQpLCcySIlWE9VIMURiuIsgTKlslCSrZQGg55ykAR/1Oe8UowHxG9ucym4/iGZmHyun4eXUEgDUjKV3MyIjRae0CcZYvtmtDVMFcMyuTLlk3CLfzZgsZ4mcre1D3bLqJZGABKyVIGYEgrO0gg6dqMs8bW9bYG3MuXZcxEEs7nWNVlzpoe9exXEi6MhRQzkMzCPmDO+gifzkQWI0ERrN4y5HPJNdn/9k=" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>

    <div class="card mb-3">
        <img src="/image/kaisa.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>

</body>

    <!--md-카드 몇개로 정렬할거냐, g-12칸으로 나눠져있기 때문에,-->
<div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="/image/kaisa.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>
    </div>
</div>
<div class="row row-cols-3 row-cols-md-4 g-4">
    <div class="col">
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>
    </div>
</div>
<div class="row row-cols-3 row-cols-md-4 g-4">
    <div class="col">
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>
    </div>
</div>
<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card h-100">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a short card.</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>
    </div>
</div>
</html>

