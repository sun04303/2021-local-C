<?php
    namespace Controller;
    use App\DB;
    class ActionController {
        static function loadShow() {
            if(!$_POST) {
                $data = DB::fetchAll("SELECT * FROM showlist");
                echo json_encode($data);
            } else {
                $id = $_POST['id'];
                $data = DB::fetch("SELECT * FROM showlist WHERE showUid = ?", [$id]);
                echo json_encode($data);
            }
        }

        static function showDate() {
            $name = $_POST['name'];
            $date = $_POST['date'];
            $time = $_POST['time'];
            $organ = $_POST['organ'];
            $place = $_POST['place'];
            $cast = $_POST['cast'];
            $content = $_POST['content'];

            DB::query("INSERT INTO showlist (showName, showDate, showTime, organizer, place, cast, rm) VALUES (?, ?, ?, ?, ?, ?, ?)", [$name, $date, $time, $organ, $place, $cast, $content]);

        }

        static function showDel() {
            $target = $_POST['a'];
            DB::query("DELETE FROM showlist WHERE showUid = ?", [$target]);
        }

        static function showUpdate() {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $date = $_POST['date'];
            $time = $_POST['time'];
            $organ = $_POST['organ'];
            $place = $_POST['place'];
            $cast = $_POST['cast'];
            $content = $_POST['content'];

            DB::query("UPDATE showlist SET showName = ?, showDate = ?, showTime = ?, organizer = ?, place = ?, cast = ?, rm = ? WHERE showUid = ?", [$name, $date, $time, $organ, $place, $cast, $content, $id]);
        }

        static function del() {
            $id = $_POST['a'];

            DB::query("DELETE FROM nihlist WHERE sn = ?", [$id]);
        }

        static function enroll() {
            $data = $_POST;

            echo json_encode($data);
        }

        static function load1() {
            $ccbaKdcd = $_POST['ccbaKdcd'];
            $ccbaCtcd = $_POST['ccbaCtcd'];
            $ccbaAsno = $_POST['ccbaAsno'];
            $data = DB::fetch("SELECT * FROM nihlist WHERE ccbaKdcd = ? AND ccbaCtcd = ? AND ccbaAsno = ?", [$ccbaKdcd, $ccbaCtcd, $ccbaAsno]);

            echo json_encode($data);
        }

        static function load() {
            $target = $_POST['a'];
            if($target == "전체") {
                $data = DB::fetchAll("SELECT * FROM nihlist");
            } else {
                $data = DB::fetchAll("SELECT * FROM nihlist WHERE bcodeName = ?", [$target]);
            }
            
            echo json_encode($data);
        }

        static function upload() {
            $data = json_decode ($_POST['a']);

            $no = $data->no;
            $ccbaKdcd = $data->ccbaKdcd;
            $ccbaAsno = $data->ccbaAsno;
            $ccbaCtcd = $data->ccbaCtcd;
            $ccbaCpno = $data->ccbaCpno;
            $longitude = $data->longitude;
            $latitude = $data->latitude;
            $ccmaName = $data->ccmaName;
            $crltsnoNm = $data->crltsnoNm;
            $ccbaMnm1 = $data->ccbaMnm1;
            $ccbaMnm2 = $data->ccbaMnm2;
            $gcodeName = $data->gcodeName;
            $bcodeName = $data->bcodeName;
            $mcodeName = $data->mcodeName;
            $scodeName = $data->scodeName;
            $ccbaQuan = $data->ccbaQuan;
            $ccbaAsdt = $data->ccbaAsdt;
            $ccbaCtcdNm = $data->ccbaCtcdNm;
            $ccsiName = $data->ccsiName;
            $ccbaLcad = $data->ccbaLcad;
            $ccceName = $data->ccceName;
            $ccbaPoss = $data->ccbaPoss;
            $ccbaAdmin = $data->ccbaAdmin;
            $ccbaCncl = $data->ccbaCncl;
            $ccbaCndt = $data->ccbaCndt;
            $imageUrl = $data->imageUrl;
            $content = $data->content;
            
            DB::query("INSERT INTO nihlist (no, ccbaKdcd, ccbaAsno, ccbaCtcd, ccbaCpno, longitude, latitude, ccmaName, crltsnoNm, ccbaMnm1, ccbaMnm2, gcodeName, bcodeName, mcodeName, scodeName, ccbaQuan, ccbaAsdt, ccbaCtcdNm, ccsiName, ccbaLcad, ccceName, ccbaPoss, ccbaAdmin, ccbaCncl, ccbaCndt, imageUrl, content) VALUES ({$no}, '{$ccbaKdcd}', '{$ccbaAsno}', '{$ccbaCtcd}', '{$ccbaCpno}', '{$longitude}', '{$latitude}', '{$ccmaName}', '{$crltsnoNm}', '{$ccbaMnm1}', '{$ccbaMnm2}', '{$gcodeName}', '{$bcodeName}', '{$mcodeName}', '{$scodeName}', '{$ccbaQuan}', '{$ccbaAsdt}', '{$ccbaCtcdNm}', '{$ccsiName}', '{$ccbaLcad}', '{$ccceName}', '{$ccbaPoss}', '{$ccbaAdmin}', '{$ccbaCncl}', '{$ccbaCndt}', '{$imageUrl}', '{$content}')");
            
            echo json_encode($data);
        }
    }