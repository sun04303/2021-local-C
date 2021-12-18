    <section>
        <div class="container">
            <div class="history">
                <div class="top mt-5">
                    <h2 style="margin: 0;">연혁</h2>
                    <div class="nav">
                        <i class="fas fa-home"></i>&nbsp;>&nbsp;<a href="#">무형문화제 관리원</a>&nbsp;>&nbsp;<a href="#">일반현황</a>&nbsp;>&nbsp;<a href="#">연혁</a>
                    </div>
                </div>
                <div class="box my-4">
                    <div class="tab-menu my-2">
                        
                    </div>
                    <div class="content mt-5 row">
                        <h4 class="col-2 selY">연혁을 등록해주세요.</h4>
                        <div class="list col-6">
                            
                        </div>
                        <div class="img col-4">
                            <img src="./resource/img/1 (142).jpg" alt="">
                        </div>
                    </div>
                    
                    <!-- Button trigger modal -->
                    <button type="button" class="enBtn btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                        연혁 등록
                    </button>

                    <!-- 등록 팝업 -->
                    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myModalLabel">연혁 등록</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="content" class="form-label">연혁내용</label>
                                        <input type="text" class="form-control" id="content" placeholder="연혁 내용을 입력해주세요." autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="date" class="form-label">연혁일자</label>
                                        <input type="date" class="form-control" id="date">
                                    </div>
                                </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="clE btn btn-secondary" data-bs-dismiss="modal">취소</button>
                                    <button type="button" class="enroll btn btn-primary">등록</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 수정 팝업 -->
                    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editLabel">연혁 수정</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="content" class="form-label">연혁내용</label>
                                        <input type="text" class="form-control" id="editcontent" placeholder="연혁 내용을 입력해주세요." autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="date" class="form-label">연혁일자</label>
                                        <input type="date" class="form-control" id="editdate">
                                    </div>
                                </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="clEd btn btn-secondary" data-bs-dismiss="modal">취소</button>
                                    <button type="button" class="editOk btn btn-primary">확인</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 삭제 확인 팝업 -->
                    <div class="modal fade" id="del" tabindex="-1" aria-labelledby="delLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="delLabel">연혁 삭제</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>정말 삭제하시겠습니까?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="clD btn btn-secondary" data-bs-dismiss="modal">취소</button>
                                    <button type="button" class="delete btn btn-danger">확인</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="/resource/js/history.js"></script>