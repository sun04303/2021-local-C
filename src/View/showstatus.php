    <section>
        <div class="showstatus" style="padding-top: 130px;">
            <div class="container">
                <h2>공연 일정 조회</h2>

                <div class="asd my-5">
                    <h6>사용 방법</h6>
                    <span>/openAPI/showList.php?searchType=M 또는 Y&year=4자리 년도(조회구분이 M일경우 필수 &month=(1~12월))</span>
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
                            <td class="text-center">searchType</td>
                            <td class="text-center">조회 구분</td>
                            <td class="text-center">필수</td>
                            <td class="text-center">M</td>
                            <td class="text-center">M: 월별, Y: 년도별</td>
                        </tr>
                        <tr>
                            <td class="text-center">year</td>
                            <td class="text-center">년도</td>
                            <td class="text-center">필수</td>
                            <td class="text-center">2021</td>
                            <td class="text-center">4자리 년도</td>
                        </tr>
                        <tr>
                            <td class="text-center">month</td>
                            <td class="text-center">월</td>
                            <td class="text-center">가변</td>
                            <td class="text-center">4</td>
                            <td class="text-center">월별 조회 시 필수(1~12)</td>
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
                            <td class="text-center">showType</td>
                            <td class="text-center">공연 종류</td>
                            <td class="text-center">필수</td>
                            <td class="text-center">M</td>
                            <td class="text-center">요청 공연 종류</td>
                        </tr>
                        <tr>
                            <td class="text-center">year</td>
                            <td class="text-center">년도</td>
                            <td class="text-center">필수</td>
                            <td class="text-center">2021</td>
                            <td class="text-center">요청 년도</td>
                        </tr>
                        <tr>
                            <td class="text-center">month</td>
                            <td class="text-center">월</td>
                            <td class="text-center">가변</td>
                            <td class="text-center">4</td>
                            <td class="text-center">요청 월</td>
                        </tr>
                        <tr>
                            <td class="text-center">totalCount</td>
                            <td class="text-center">항목수</td>
                            <td class="text-center">필수</td>
                            <td class="text-center">17</td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center" colspan="4">items</td>
                            <td class="text-center">조회 결과 항목 목록(0..n)</td>
                        </tr>
                        <tr>
                            <td class="text-center">showUid</td>
                            <td class="text-center">공연 고유번호</td>
                            <td class="text-center">필수</td>
                            <td class="text-center">1</td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">showName</td>
                            <td class="text-center">공연명</td>
                            <td class="text-center">필수</td>
                            <td class="text-center">신노이</td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">showDt</td>
                            <td class="text-center">공연일시</td>
                            <td class="text-center">필수</td>
                            <td class="text-center">2018-01-01 14:00</td>
                            <td class="text-center">공연일자 + 공연일시</td>
                        </tr>
                        <tr>
                            <td class="text-center">organizer</td>
                            <td class="text-center">주관</td>
                            <td class="text-center"></td>
                            <td class="text-center">무형문화재관리원</td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">place</td>
                            <td class="text-center">공연장소</td>
                            <td class="text-center"></td>
                            <td class="text-center">얼쑤마루</td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">cast</td>
                            <td class="text-center">출연진</td>
                            <td class="text-center"></td>
                            <td class="text-center">미정</td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">rm</td>
                            <td class="text-center">공연내용</td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>