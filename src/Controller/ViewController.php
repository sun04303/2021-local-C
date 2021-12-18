<?php
    namespace Controller;
    use App\DB;
    class ViewController {
        static function photo() {
            $photo = isset($_GET['photo']) ? $_GET['photo'] : "";
            if( $photo != "" ) {
                $file = "../../nihcImage/" . $photo;
                if( file_exists($file) ) {
                    $type = "image/jpeg";
                    header("Content-type: " .$type);
                    header("Content-Length: " . filesize($file));
                    readfile($file);	
                } else {
                    $file = "./resource/img/noimage.png";
                    $type = "image/png";
                    header("Content-type: " .$type);
                    header("Content-Length: " . filesize($file));
                    readfile($file);
                }
            } else {
                $file = "./resource/img/noimage.png";
                $type = "image/png";
                header("Content-type: " .$type);
                header("Content-Length: " . filesize($file));
                readfile($file);
            }
        }

        static function showEdit() {
            $target = $_GET['target'];
            $data = DB::fetch("SELECT * FROM showlist WHERE showUid = ?", [$target]);
            view('showEdit', $target , $data);
        }

        static function editnih() {
            $target = $_GET['target'];
            $data = DB::fetch("SELECT * FROM nihlist WHERE sn = ?", [$target]);
            view('editnih', $target , $data);
        }

        static function nihstatus() {
            view('nihstatus');
        }

        static function viewNihStatus() {
            $pattern = "/[0-9]/i";
            (int)$pageNo = $_GET['pageNo'] - 1;
            (int)$numOfRow = $_GET['numOfRows'];
            $option = count($_GET) > 2 ? $_GET['bcodeName'] : "";

            if(!(preg_match($pattern, $pageNo)) || !(preg_match($pattern, $numOfRow))) {
                header('Content-Type: text/html; charset=UTF-8');
                go('올바르지 않은 경로입니다.', '/nihstatus');
            }

            $pageNo = $pageNo * $numOfRow;

            if($option != "") {
                $data = DB::fetchAll("SELECT ccbaKdcd, ccbaAsno, ccbaCtcd, ccbaCpno, ccmaName, ccbaMnm1, ccbaMnm2, gcodeName, bcodeName, mcodeName, scodeName, ccbaQuan, ccbaAsdt, ccbaCtcdNm, ccsiName, ccbaLcad, ccceName, ccbaPoss, ccbaAdmin, ccbaCncl, ccbaCndt, (imageUrl) image, content FROM nihlist WHERE bcodeName LIKE '%".$option."%' LIMIT $pageNo, $numOfRow");
                
                foreach($data as $item) {
                    $path = '../../nihcimage/'.$item->image;
                    $type = pathinfo($path, PATHINFO_EXTENSION);
                    $data1 = file_get_contents($path);
                    $base64 = 'data:image/'.$type. ';base64,' . base64_encode($data1);

                    $item->image = $base64;
                }
                $arr = array('numOfRows' => $numOfRow, 'pageNo' => $pageNo, 'totalCount' => count($data), 'items' => $data);
            } else {
                $data = DB::fetchAll("SELECT ccbaKdcd, ccbaAsno, ccbaCtcd, ccbaCpno, ccmaName, ccbaMnm1, ccbaMnm2, gcodeName, bcodeName, mcodeName, scodeName, ccbaQuan, ccbaAsdt, ccbaCtcdNm, ccsiName, ccbaLcad, ccceName, ccbaPoss, ccbaAdmin, ccbaCncl, ccbaCndt, (imageUrl) image, content FROM nihlist LIMIT $pageNo, $numOfRow");
                foreach($data as $item) {
                    $path = '../../nihcimage/'.$item->image;
                    $type = pathinfo($path, PATHINFO_EXTENSION);
                    $data1 = file_get_contents($path);
                    $base64 = 'data:image/'.$type. ';base64,' . base64_encode($data1);

                    $item->image = $base64;
                }
                $arr = array('numOfRows' => $numOfRow, 'pageNo' => $pageNo + 1, 'totalCount' => $numOfRow, 'items' => $data);
            }
            Viewstatus('viewNihStatus', $pageNo, json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
        }

        static function showstatus() {
            view('showstatus');
        }

        static function viewShowStatus() {
            $pattern = "/[0-9]/i";
            $searchType = $_GET['searchType'];

            if(!($searchType == "Y" || $searchType == "M")) {
                header('Content-Type: text/html; charset=UTF-8');
                go('올바르지 않은 경로입니다.', '/showstatus');
            }

            $year = $_GET['year'];

            if(!(preg_match($pattern, $year))) {
                header('Content-Type: text/html; charset=UTF-8');
                go('올바르지 않은 경로입니다.', '/showstatus');
            }

            $month = count($_GET) > 2 ? $_GET['month'] : "";

            if(strlen($month) == 1) {
                $month = '0'.$month;
            }

            if($searchType == 'Y') {
                $data = DB::fetchAll("SELECT showUid, showName, organizer, place, cast, rm, CONCAT(showDate,' ',showTime) showDt FROM showlist WHERE showDate LIKE '%".$year."%'");
                $arr = array("searchType" => $searchType, "year" => $year, "totalCount" => count($data), "items" => $data);
            } else if(isset($month)){
                $data = DB::fetchAll("SELECT showUid, showName, organizer, place, cast, rm, CONCAT(showDate,' ',showTime) showDt FROM showlist WHERE showDate LIKE '%-".$month."-%'");
                $arr = array("searchType" => $searchType, "year" => $year, "month" => $month, "totalCount" => count($data),"items" => $data);
            }
            
            Viewstatus('viewShowStatus', $searchType, json_encode($arr, JSON_PRETTY_PRINT));
        }

        static function year() {
            view('year');
        }

        static function phone() {
            view('phone');
        }

        static function history() {
            view("history");
        }

        static function sub1() {
            $target = isset($_GET['search']) ? $_GET['search'] : "전체";
            view("sub1", $target);
        }

        static function month() {
            view('month');
        }

        static function test() {
            view("test");
        }

        static function main() {
            view("main");
        }
    }