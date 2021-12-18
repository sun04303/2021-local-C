<section>
    <div class="month">
        <div class="container">
            <div class="top">
                <h2>월간 공연일정</h2>
                <div class="nav">
                    <i class="fas fa-home"></i>&nbsp;>&nbsp;<a href="#">행사안내</a>&nbsp;>&nbsp;<a href="#">공연</a>&nbsp;>&nbsp;<a href="/year">월간 공연일정</a>
                </div>
            </div>
            <button class="mt-5 showBtn btn btn-primary" data-bs-target="#show" data-bs-toggle="modal">일정 등록</button>
            <table class="table table-bordered mt-3 mb-5">
                <tbody>
                    <tr class="btns">
                    
                    </tr>
                    <tr class="info">
                        <th style="color: #ff6c21;" hight="30">일</td>
                        <th>월</th>
                        <th>화</th>
                        <th>수</th>
                        <th>목</th>
                        <th>금</th>
                        <th style="color: #00f;">토</th>
                    </tr>
                </tbody>
            </table>

            <!-- 일정 팝업 -->
            <div class="modal fade" id="show" aria-hidden="true" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">일정 등록</h5>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="mb-3">
                                    <label class="form-label" for="showName">공연 이름</label>
                                    <input class="form-control" type="text" name="showName" id="showName" autocomplete="off" placeholder="이름을 입력해주세요.">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="showDate">공연일자</label>
                                    <input class="form-control" type="date" name="showDate" id="showDate">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="showTime">공연일시</label>
                                    <input class="form-control" type="time" name="showTime" id="showTime">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="organizer">주관</label>
                                    <input class="form-control" type="text" name="organizer" id="organizer" autocomplete="off" placeholder="주관명을 입력해주세요.">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="place">공연장소</label>
                                    <input class="form-control" type="text" name="place" id="place" autocomplete="off" placeholder="장소를 입력해주세요.">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="cast">출연진</label>
                                    <input class="form-control" type="text" name="cast" id="cast" autocomplete="off" placeholder="출연진을 쉼표로 구분하여 입력해주세요.">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="rm">공연내용</label>
                                    <textarea class="form-control"rea name="rm" id="rm" rows="5" placeholder="공연의 내용을 입력해주세요."></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button class="showcl btn btn-secondary">취소</button>
                            <button class="showEnroll btn btn-primary">등록</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="/resource/js/month.js"></script>