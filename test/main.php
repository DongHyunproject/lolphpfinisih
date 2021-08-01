<?php

 ?>
<!doctype html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<title>HTML</title>
	<style>
        table {

            width: 100%;

            border-spacing: 0;

            border-collapse: separate;

            border-left: 1px solid #000;

            border-top: 1px solid #000;

        }



        th, td {

            border-right: 1px solid #000;

            border-bottom: 1px solid #000;

        }



        .text-ellipsis {

            display: table;

            table-layout: fixed;

            width: 100%;

            white-space: nowrap;

        }

        .text-ellipsis > * {

            display: table-cell;

            overflow: hidden;

            text-overflow: ellipsis;

        }


        * {
            font-size: 16px;
            font-family: Consolas, sans-serif;
        }
	</style>
</head>
<body>
<form method="get" action="form-action.php">
	<p><label>Color : <input type="text" name="color"></label></p>
	<p><label>Sport : <input type="text" name="sport"></label></p>
	<p><input type="submit" value="Submit"></p>
</form>

<table>

    <colgroup>

        <col style="width: 10%" />

        <col style="width: 70%" />

        <col style="width: 20%" />

    </colgroup>

    <thead>

    <tr>

        <th>No</th>

        <th>제목</th>

        <th>등록일</th>

    </tr>

    </thead>

    <tbody>

    <tr>

        <td>0000</td>

        <td><div class="text-ellipsis"><a href="#">동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세>동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세>동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세</a></div></td>

        <td>0000-00-00</td>

    <tr>

    <tr>

        <td>0000</td>

        <td><div class="text-ellipsis"><p>무궁화 삼천리 화려 강산무궁화 삼천리 화려 강산무궁화 삼천리 화려 강산무궁화 삼천리 화려 강산무궁화 삼천리 화려 강산</p></div></td>

        <td>0000-00-00</td>

    <tr>

    <tr>

        <td>0000</td>

        <td><div class="text-ellipsis"><span>대한민국 대한으로 길이 보전하세대한민국 대한으로 길이 보전하세대한민국 대한으로 길이 보전하세대한민국 대한으로 길이 보전하세</span></div></td>

        <td>0000-00-000000-00-000000-00-000000-00-00</td>

    <tr>

    <tbody>

</table>

</body>
</html>
