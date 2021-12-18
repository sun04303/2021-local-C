<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./resource/js/jquery-3.5.1.js"></script>
    <script src="./resource/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="./resource/fontawesome/css/all.css">
    <link rel="stylesheet" href="./resource/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./resource/css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div>
            <div class="box">
                <!-- 로고 -->
                <div class="logo">
                    <a href="/"><img src="./resource/img/로고.png" alt="로고 이미지" title="로고 이미지"></a>
                </div>
                <!-- pc메뉴 -->
                <nav class="menu pcmenu">
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">무형문화재관리원</a>
                            <div class="sub">
                                <ul>
                                    <li><a href="#" class="one">소개</a></li>
                                    <li class="dsub">
                                        <a href="#" class="one">일반현황</a>
                                        <a href="#">설립목적</a>
                                        <a href="#">연혁</a>
                                        <a href="#">역할</a>
                                    </li>
                                    <li><a href="#" class="one">주요업무계획</a></li>
                                    <li><a href="#" class="one">조직 및 구성</a></li>
                                    <li><a href="#" class="one">전화번호</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">무형문화재 현황</a>
                            <div class="sub">
                                <ul>
                                    <li><a href="#" class="one">전통 공연·예술</a></li>
                                    <li><a href="#" class="one">전통기술</a></li>
                                    <li><a href="#" class="one">전통지식</a></li>
                                    <li><a href="#" class="one">구전 전통 및 표현</a></li>
                                    <li><a href="#" class="one">전통 생활관습</a></li>
                                    <li><a href="#" class="one">의례·의식</a></li>
                                    <li><a href="#" class="one">전통 놀이·무예</a></li>
                                    <li><a href="#" class="one">전체 현황</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">행사 안내</a>
                            <div class="sub">
                                <ul>
                                    <li class="dsub">
                                        <a href="#" class="one">공연</a>
                                        <a href="#">월간 공연 일정</a>
                                        <a href="#">연간 공연 일정</a>
                                    </li>
                                    <li class="dsub">
                                        <a href="#" class="one">전시</a>
                                        <a href="#">관람안내</a>
                                        <a href="#">전시실</a>
                                        <a href="#">디지털 체험관</a>
                                        <a href="#">기획 전시실</a>
                                    </li>
                                    <li class="dsub">
                                        <a href="#" class="one">교육</a>
                                        <a href="#">전문 교육</a>
                                        <a href="#">사회 교육</a>
                                        <a href="#">연간 교육일정</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">전승지원</a>
                            <div class="sub">
                                <ul>
                                    <li><a href="#" class="one">공방</a></li>
                                    <li><a href="#" class="one">공예품 갤러리</a></li>
                                    <li><a href="#" class="one">전수교육관 현황</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">공개데이터</a>
                            <div class="sub">
                                <ul>
                                    <li><a href="#" class="one">무형문화재 현황 조회</a></li>
                                    <li><a href="#" class="one">공연 일정 조회</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="ect pcmenu">
                    <div class="user">
                        <a href="#">로그인</a>
                        <a href="#">회원가입</a>
                        <a href="#">문의하기</a>
                    </div>
                    <select name="lang" id="lang">
                        <option value="kr">한국어</option>
                        <option value="en">English</option>
                        <option value="ch">中文(简体)</option>
                        <option value="jp">日本語</option>
                    </select>
                </div>
                <!-- 모바일 메뉴 -->
                <div class="mMenu">
                    <input style="display: none;" type="checkbox" name="chk" id="chk">
                    <label class="menuIcon" for="chk">
                        <span></span>
                        <span></span>
                        <span></span>
                    </label>
                    <div class="slider">
                        <details>
                            <summary><a class="mone" href="#">HOME</a></summary>
                        </details>
                        <details>
                            <summary><a class="mone" href="#">무형문화제관리원</a></summary>
                            <ul>
                                <li><a class="one" href="#">소개</a></li>
                                <li>
                                    <details>
                                        <summary><a class="one" href="#">일반현황</a></summary>
                                        <ul>
                                            <li>설립목적</li>
                                            <li>연혁</li>
                                            <li>역할</li>
                                        </ul>
                                    </details>
                                </li>
                                <li><a class="one" href="#">주요업무계획</a></li>
                                <li><a class="one" href="#">조직 및 구성</a></li>
                                <li><a class="one" href="#">전화번호</a></li>
                            </ul>
                        </details>
                        <details>
                            <summary><a class="mone" href="#">무형문화제 현황</a></summary>
                            <ul>
                                <li><a class="one" href="#">전통 공연·예술</a></li>
                                <li><a class="one" href="#">전통기술</a></li>
                                <li><a class="one" href="#">전통지식</a></li>
                                <li><a class="one" href="#">구전 전통 및 표현</a></li>
                                <li><a class="one" href="#">전통 생활관습</a></li>
                                <li><a class="one" href="#">의례·의식</a></li>
                                <li><a class="one" href="#">전통 놀이·무예</a></li>
                                <li><a class="one" href="#">전체 현황</a></li>
                            </ul>
                        </details>
                        <details>
                            <summary><a class="mone" href="#">행사 안내</a></summary>
                             <ul>
                                <li>
                                    <details>
                                        <summary><a class="one" href="#">공연</a></summary>
                                        <ul>
                                            <li>월간 공연 일정</li>
                                            <li>연간 공연 일정</li>
                                        </ul>
                                    </details>
                                </li>
                                <li>
                                    <details>
                                        <summary><a class="one" href="#">전시</a></summary>
                                        <ul>
                                            <li>관람안내</li>
                                            <li>전시실</li>
                                            <li>디지털 체험관</li>
                                            <li>기획 전시실</li>
                                        </ul>
                                    </details>
                                </li>
                                <li>
                                    <details>
                                        <summary><a class="one" href="#">교육</a></summary>
                                        <ul>
                                            <li>전문 교육</li>
                                            <li>사회 교육</li>
                                            <li>연간 교육일정</li>
                                        </ul>
                                    </details>
                                </li>
                            </ul>
                        </details>
                        <details>
                            <summary><a class="mone" href="#">전승지원</a></summary>
                            <ul>
                                <li><a class="one" href="#">공방</a></li>
                                <li><a class="one" href="#">공예품 갤러리</a></li>
                                <li><a class="one" href="#">전수교육관 현황</a></li>
                            </ul>
                        </details>
                        <details>
                            <summary><a class="mone" href="#">공개 데이터</a></summary>
                            <ul>
                                <li><a class="one" href="#">무형문화제 현황 조회</a></li>
                                <li><a class="one" href="#">공연 일정 조회</a></li>
                            </ul>
                        </details>
                    </div>
                </div>
            </div>
        </div>
    </header>