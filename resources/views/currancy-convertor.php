<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Valyuta ayirboshlash</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="resources/css/style.css">
</head>
<body>
<div class="currency-section text-center pt-5 bg-primary-subtle">
    <h1>Valyuta ayirboshlash</h1>
    <p>Xalqaro biznes to'lovini amalga oshirish kerakmi? Bizning jonli valyuta kurslariga qarang</p>
    <div class="currancy-card">
        <h3>Tez va arzon xalqaro biznes to'lovlarini amalga oshiring</h3>
        <p>Xavfsiz xalqaro biznes toʻlovlarini XX valyutada, raqobatbardosh narxlarda yashirin holda yuboring
            to'lovlar.</p>
        <form>
            <div class="row g-3 aligin-items-center">
                <div class="col-md-5">
                    <label for="amount" class="form-label visually-hidden ">Amount</label>
                    <input type="numer" id="amount" class="form-control" placeholder="Amount" value="10000" name="amount">
                </div>
                <div class="col-md-3 text-center">
                    <select class="form-select" name="form" >
                        <?php
                        global $currency;
                        $currencies=array_slice($currency->getCurrencies(),0,10);
                        foreach($currencies as $key=>$currency_rate){
                            echo '<option value="'.$key.'">'.$key.'</option>';
                        }
                        ?>
                        <option value="UZS">UZS</option>
                    </select>

                </div>
                <div class="col-md-1 text-center" >
                    <span>⇆</span>
                </div>
                <div class="col-md-3">
                    <select class="form-select" name="form" >
                        <?php
                        global $currency;
                        $currencies=array_slice($currency->getCurrencies(),0,10);
                        foreach($currencies as $key=>$currency_rate){
                            echo '<option value="'.$key.'">'.$key.'</option>';
                        }
                        ?>
                        <option value="UZS">UZS</option>
                    </select>

                </div>

            </div>
            <p class="rate-info mt-2">
                <?php
                if(isset($_GET['form']) && isset($_GET['to']) && isset($_GET['amount'])){
                    echo $currency->exchange($_GET['from'],$_GET['to'],$_GET['amount']);
                }
                ?>
            </p>
            <button type="submit" class="btn ntn-primary btn-primary-custom mt-3"> Almashtirish</button>
        </form>
    </div>
</div>
<div class="info-section bg-light">
    <h4 class="fw-bold">Vaqtingizni tejaylik</h4>
    <p class="text-muted">Agar siz maqsadli ayirboshlash kursini nazarda tutgan bo'lsangiz, lekin bozor harakatini kuzatishga vaqtingiz bo'lmasa, unda qat'iy buyurtma siz uchun mukammal bo'lishi mumkin. Siz tanlagan tarifga yetganingizda, biz darhol harakat qilamiz,
        o'z biznesingizga e'tiboringizni qaratish uchun sizga erkinlik beradi.</p>
    <a href="/weather" class="btn btn-outline-danger">Ob havo malumotlari</a>
</div>
</body>
</html>



