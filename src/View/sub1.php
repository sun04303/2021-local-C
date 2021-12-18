    <section>
        <div class="container">
            <!-- 무형문화제 현황 -->
            <div class="status">
                <div class="top">
                    <h2 class="mt-5">무형문화제 현황</h2>
                    <div class="nav">
                        <i class="fas fa-home"></i>&nbsp;>&nbsp;<a href="/sub1?search=전체">무형 문화제 현황</a>&nbsp;>&nbsp;<a class="search" href="/sub1?search=<?= $data ?>"><?= $data ?></a>
                    </div>
                </div>
                <div class="info mt-4">
                    <div class="total-info">
                        <div class="total-cnt"></div>&nbsp;
                        <div class="curpage"></div> /
                        <div class="endpage"></div>
                    </div>

                    <div class="kind">
                        <div class="gal chk text-center">앨범형</div>
                        <div class="list text-center">목록형</div>
                    </div>
                </div>
                
                <div class="box mb-5">
                    <div class="list mt-3 mb-5 row">
                        
                    </div>
                    <div style="display: none;" class="list1 my-5">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">순번</th>
                                    <th scope="col" class="text-center">문화재명</th>
                                    <th scope="col" class="text-center">문화재 종목</th>
                                    <th scope="col" class="text-center">지정호수</th>
                                    <th scope="col" class="text-center">소재지</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <button class="nihen btn btn-primary" data-bs-toggle="modal" data-bs-target="#enroll">등록</button>
                    <div id="pagination">
                        
                    </div>

                    <!-- 등록 팝업 -->
                    <div class="modal fade" id="enroll" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="enrollLabel">문화재 등록</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <form class="row" id="enrollForm">
                                    <div class="mb-3 col-4">
                                        <label for="ccbaKdcd" class="form-label">종목코드</label>
                                        <input type="text" class="form-control" id="ccbaKdcd" placeholder="종목코드 입력">
                                    </div>
                                    <div class="mb-3 col-4">
                                        <label for="ccbaAsno" class="form-label">지정번호</label>
                                        <input type="text" class="form-control" id="ccbaAsno" placeholder="지정번호 입력">
                                    </div>
                                    <div class="mb-3 col-4">
                                        <label for="ccbaCtcd" class="form-label">시도코드</label>
                                        <input type="text" class="form-control" id="ccbaCtcd" placeholder="시도코드 입력">
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="ccbaCpno" class="form-label">연계번호</label>
                                        <input type="text" class="form-control" id="ccbaCpno" placeholder="문화재 연계번호">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="longitude" class="form-label">경도</label>
                                        <input type="text" class="form-control" id="longitude" placeholder="0 위치 없음">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="latitude" class="form-label">위도</label>
                                        <input type="text" class="form-control" id="latitude" placeholder="0 위치 없음">
                                    </div>
                                    <div class="mb-3 col-8">
                                        <label for="ccmaName" class="form-label">문화재종목</label>
                                        <input type="text" class="form-control" id="ccmaName" placeholder="문화재 종목 입력">
                                    </div>
                                    <div class="mb-3 col-4">
                                        <label for="crltsnoNm" class="form-label">지정호수</label>
                                        <input type="text" class="form-control" id="crltsnoNm" placeholder="지정호수 입력">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="ccbaMnm1" class="form-label">문화재명(국문)</label>
                                        <input type="text" class="form-control" id="ccbaMnm1" placeholder="문화재명(국문) 입력">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="ccbaMnm2" class="form-label">문화재명(한문)</label>
                                        <input type="text" class="form-control" id="ccbaMnm2" placeholder="문화재명(한문) 입력">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="gcodeName" class="form-label">문화재분류</label>
                                        <input type="text" class="form-control" id="gcodeName">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="bcodeName" class="form-label">문화재종류</label>
                                        <input type="text" class="form-control" id="bcodeName">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="mcodeName" class="form-label">문화재분류3</label>
                                        <input type="text" class="form-control" id="mcodeName">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="scodeName" class="form-label">문화재분류4</label>
                                        <input type="text" class="form-control" id="scodeName">
                                    </div>
                                    <div class="mb-3 col-5">
                                        <label for="ccbaQuan" class="form-label">수량</label>
                                        <input type="number" min="0" step="1" class="form-control" id="ccbaQuan">
                                    </div>
                                    <div class="mb-3 col-7">
                                        <label for="ccbaAsdt" class="form-label">지정(등록일)</label>
                                        <input type="date" class="form-control" id="ccbaAsdt">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="ccbaCtcdNm" class="form-label">시도명</label>
                                        <input type="text" class="form-control" id="ccbaCtcdNm" placeholder="시도명 입력">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="ccsiName" class="form-label">시군구명</label>
                                        <input type="text" class="form-control" id="ccsiName" placeholder="시군구명 입력">
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="ccbaLcad" class="form-label">소재지 상세</label>
                                        <input type="text" class="form-control" id="ccbaLcad" placeholder="소재지 상세 입력">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="ccceName" class="form-label">시대</label>
                                        <input type="text" class="form-control" id="ccceName" placeholder="시대 입력">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="ccbaPoss" class="form-label">소유자</label>
                                        <input type="text" class="form-control" id="ccbaPoss" placeholder="소유자 입력">
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="ccbaAdmin" class="form-label">관리자</label>
                                        <input type="text" class="form-control" id="ccbaAdmin">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="ccbaCncl" class="form-label">지정해제여부</label>
                                        <input type="text" class="form-control" id="ccbaCncl" placeholder="지정해제여부 입력">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="ccbaCndt" class="form-label">지정해제일</label>
                                        <input type="text" class="form-control" id="ccbaCndt" placeholder="지정해제일 입력">
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="image" class="form-label">이미지</label>
                                        <input type="file" class="form-control" id="image" placeholder="이미지 등록">
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="content" class="form-label">설명</label>
                                        <textarea class="form-control" id="content" rows="5" placeholder="설명을 입력해주세요"></textarea>
                                    </div>
                                </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="clEn btn btn-secondary" data-bs-dismiss="modal">취소</button>
                                    <button type="button" class="enroll btn btn-primary">확인</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="/resource/js/sub1.js"></script>