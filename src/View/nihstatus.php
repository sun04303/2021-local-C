    <section>
        <div class="nihstatus" style="padding-top: 130px;">
            <div class="container">
                <h2>무형 문화제 현황 조회</h2>

                <div class="asd my-5">
                    <h6>사용 방법</h6>
                    <span>/openAPI/nihList.php?pageNo=요청 페이지 번호&numOfRows=페이지당 항목수(선택 &bcodeName=무형문화 종류 ex.전통 공연)</span>
                </div>

                <h5 class="mt-5 mb-3">요청 전문 명세서</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">항목명</th>
                            <th class="text-center">국문명</th>
                            <th class="text-center">필수</th>
                            <th class="text-center">샘플</th>
                            <th class="text-center">항목설명</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">pageNo</td>
                            <td class="text-center">페이지 번호</td>
                            <td class="text-center">필수</td>
                            <td class="text-center">1</td>
                            <td class="text-center">요청 페이지 번호</td>
                        </tr>
                        <tr>
                            <td class="text-center">numOfRows</td>
                            <td class="text-center">페이지당 항목수</td>
                            <td class="text-center">필수</td>
                            <td class="text-center">3</td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">bcodeName</td>
                            <td class="text-center">무형문화 종류</td>
                            <td class="text-center"></td>
                            <td class="text-center">전통 공연</td>
                            <td class="text-center">포함(LIKE 검색)</td>
                        </tr>
                    </tbody>
                </table>

                <h5 class="mt-5 mb-3">응답 전문 명세서</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">항목명</th>
                            <th class="text-center">국문명</th>
                            <th class="text-center">필수</th>
                            <th class="text-center">샘플</th>
                            <th class="text-center">항목설명</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">numOfRows</td>
                            <td class="text-center">페이지당 항목수</td>
                            <td class="text-center">필수</td>
                            <td class="text-center">3</td>
                            <td class="text-center">요청 항목 수</td>
                        </tr>
                        <tr>
                            <td class="text-center">pageNo</td>
                            <td class="text-center">페이지</td>
                            <td class="text-center">필수</td>
                            <td class="text-center">1</td>
                            <td class="text-center">요청 페이지 번호</td>
                        </tr>
                        <tr>
                            <td class="text-center">totalCount</td>
                            <td class="text-center">모든 항목수</td>
                            <td class="text-center">필수</td>
                            <td class="text-center">11</td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center" colspan="4">items</td>
                            <td class="text-center">조회 결과 항목 목록(0..n)</td>
                        </tr>
                        <tr>
                            <td class="text-center">ccbaKdcd</td>
                            <td class="text-center">종목코드</td>
                            <td class="text-center">필수</td>
                            <td class="text-center">17</td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">ccbaAsno</td>
                            <td class="text-center">지정번호</td>
                            <td class="text-center">필수</td>
                            <td class="text-center">170000</td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">ccbaCtcd</td>
                            <td class="text-center">시도코드</td>
                            <td class="text-center">필수</td>
                            <td class="text-center">11</td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">ccbaCpno</td>
                            <td class="text-center">연계번호</td>
                            <td class="text-center"></td>
                            <td class="text-center">1271100170000</td>
                            <td class="text-center">문화재 연계번호</td>
                        </tr>
                        <tr>
                            <td class="text-center">ccmaName</td>
                            <td class="text-center">문화재종목</td>
                            <td class="text-center">필수</td>
                            <td class="text-center">국가무형문화재</td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">ccbaMnm1</td>
                            <td class="text-center">문화재명(국문)</td>
                            <td class="text-center">필수</td>
                            <td class="text-center">봉산탈춤</td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">ccbaMnm2</td>
                            <td class="text-center">문화재명(한자)</td>
                            <td class="text-center"></td>
                            <td class="text-center">鳳山탈춤</td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">gcodeName</td>
                            <td class="text-center">문화재분류</td>
                            <td class="text-center"></td>
                            <td class="text-center">무형문화재</td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">bcodeName</td>
                            <td class="text-center">문화재분류2(종류)</td>
                            <td class="text-center"></td>
                            <td class="text-center">전통 공연·예술</td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">mcodeName</td>
                            <td class="text-center">문화재분류3</td>
                            <td class="text-center"></td>
                            <td class="text-center">연희</td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">scodeName</td>
                            <td class="text-center">문화재분류4</td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">ccbaQuan</td>
                            <td class="text-center">수량</td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">ccbaAsdt</td>
                            <td class="text-center">지정(등록일)</td>
                            <td class="text-center"></td>
                            <td class="text-center">19670616</td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">ccbaCtcdNm</td>
                            <td class="text-center">시도명</td>
                            <td class="text-center"></td>
                            <td class="text-center">서울특별시</td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">ccsiName</td>
                            <td class="text-center">시군구명</td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">ccbaLcad</td>
                            <td class="text-center">소재지 상세</td>
                            <td class="text-center"></td>
                            <td class="text-center">서울특별시</td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">ccceName</td>
                            <td class="text-center">시대</td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">ccbaPoss</td>
                            <td class="text-center">소유자</td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">ccbaAdmin</td>
                            <td class="text-center">관리자</td>
                            <td class="text-center"></td>
                            <td class="text-center">(사)봉산탈춤...</td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">ccbaCncl</td>
                            <td class="text-center">지정해제여부</td>
                            <td class="text-center"></td>
                            <td class="text-center">N</td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">ccbaCndt</td>
                            <td class="text-center">지정해제일</td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">image</td>
                            <td class="text-center">이미지</td>
                            <td class="text-center"></td>
                            <td class="text-center">data:image/….....</td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">content</td>
                            <td class="text-center">설명</td>
                            <td class="text-center"></td>
                            <td class="text-center">탈춤이란…</td>
                            <td class="text-center"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>