<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <link href="CSS/main_theme.css" rel="stylesheet" type="text/css" />
    <title>Where-is-Locker?</title>

    <script type="text/javascript" src="https://oapi.map.naver.com/openapi/v3/maps.js?ncpClientId=opvn0lc24j"></script>
</head>
<body>
<!--제목 section(헤더?)-->
    <section class="page-head">
        <h1>Where is Locker???</h1>
    </section>

<!--몸통 section-->
    <section class="page-body">
        <p>테스트 중입니다.</p>

        <form action="form.php" method="GET">
            <label>
                <input type = "text" name = "input1" />
            </label>

            <input type = "submit" value="save" />
        </form>

        <div id="map" style="width:100%;height:400px;"></div>

        <script type="text/javascript">
            var map = null;

            function initMap() {
                map = new naver.maps.Map('map', {
                    center: new naver.maps.LatLng(37.3595704, 127.105399),
                    zoom: 10
                });
            }

            initMap();
        </script>
    </section>

</body>
</html>