    <section>
        <div class="container">
            <div class="editnih">
                <!-- 수정 팝업 -->
                <h5 class="modal-title" id="editLabel">문화제 수정</h5>
                <div class="modal-body">
                <form class="row" id="editForm">
                    <div class="mb-3 col-4">
                        <label for="ccbaKdcd1" class="form-label">종목코드</label>
                        <input value="<?= $list-> ccbaKdcd ?>" type="text" class="form-control" id="ccbaKdcd1" placeholder="종목코드 입력">
                    </div>
                    <div class="mb-3 col-4">
                        <label for="ccbaAsno1" class="form-label">지정번호</label>
                        <input value="<?= $list-> ccbaAsno ?>" type="text" class="form-control" id="ccbaAsno1" placeholder="지정번호 입력">
                    </div>
                    <div class="mb-3 col-4">
                        <label for="ccbaCtcd1" class="form-label">시도코드</label>
                        <input value="<?= $list-> ccbaCtcd ?>" type="text" class="form-control" id="ccbaCtcd1" placeholder="시도코드 입력">
                    </div>
                    <div class="mb-3 col-12">
                        <label for="ccbaCpno1" class="form-label">연계번호</label>
                        <input value="<?= $list-> ccbaCpno ?>" type="text" class="form-control" id="ccbaCpno1" placeholder="문화재 연계번호">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="longitude1" class="form-label">경도</label>
                        <input value="<?= $list-> longitude ?>" type="text" class="form-control" id="longitude1" placeholder="0 위치 없음">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="latitude1" class="form-label">위도</label>
                        <input value="<?= $list-> latitude ?>" type="text" class="form-control" id="latitude1" placeholder="0 위치 없음">
                    </div>
                    <div class="mb-3 col-8">
                        <label for="ccmaName1" class="form-label">문화재종목</label>
                        <input value="<?= $list-> ccmaName ?>" type="text" class="form-control" id="ccmaName1" placeholder="문화재 종목 입력">
                    </div>
                    <div class="mb-3 col-4">
                        <label for="crltsnoNm1" class="form-label">지정호수</label>
                        <input value="<?= $list-> crltsnoNm ?>" type="text" class="form-control" id="crltsnoNm1" placeholder="지정호수 입력">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="ccbaMnm11" class="form-label">문화재명(국문)</label>
                        <input value="<?= $list-> ccbaMnm1 ?>" type="text" class="form-control" id="ccbaMnm11" placeholder="문화재명(국문) 입력">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="ccbaMnm21" class="form-label">문화재명(한문)</label>
                        <input value="<?= $list-> ccbaMnm2 ?>" type="text" class="form-control" id="ccbaMnm21" placeholder="문화재명(한문) 입력">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="gcodeName1" class="form-label">문화재분류</label>
                        <input value="<?= $list-> gcodeName ?>" type="text" class="form-control" id="gcodeName1">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="bcodeName1" class="form-label">문화재종류</label>
                        <input value="<?= $list-> bcodeName ?>" type="text" class="form-control" id="bcodeName1">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="mcodeName1" class="form-label">문화재분류3</label>
                        <input value="<?= $list-> mcodeName ?>" type="text" class="form-control" id="mcodeName1">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="scodeName1" class="form-label">문화재분류4</label>
                        <input value="<?= $list-> scodeName ?>" type="text" class="form-control" id="scodeName1">
                    </div>
                    <div class="mb-3 col-5">
                        <label for="ccbaQuan1" class="form-label">수량</label>
                        <input value="<?= $list-> ccbaQuan ?>" type="number" min="0" step="1" class="form-control" id="ccbaQuan1">
                    </div>
                    <div class="mb-3 col-7">
                        <label for="ccbaAsdt1" class="form-label">지정(등록일)</label>
                        <input value="<?= $list-> ccbaAsdt ?>" type="date" class="form-control" id="ccbaAsdt1">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="ccbaCtcdNm1" class="form-label">시도명</label>
                        <input value="<?= $list-> ccbaCtcdNm ?>" type="text" class="form-control" id="ccbaCtcdNm1" placeholder="시도명 입력">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="ccsiName1" class="form-label">시군구명</label>
                        <input value="<?= $list-> ccsiName ?>" type="text" class="form-control" id="ccsiName1" placeholder="시군구명 입력">
                    </div>
                    <div class="mb-3 col-12">
                        <label for="ccbaLcad1" class="form-label">소재지 상세</label>
                        <input value="<?= $list-> ccbaLcad ?>" type="text" class="form-control" id="ccbaLcad1" placeholder="소재지 상세 입력">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="ccceName1" class="form-label">시대</label>
                        <input value="<?= $list-> ccceName ?>" type="text" class="form-control" id="ccceName1" placeholder="시대 입력">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="ccbaPoss1" class="form-label">소유자</label>
                        <input value="<?= $list-> ccbaPoss ?>" type="text" class="form-control" id="ccbaPoss1" placeholder="소유자 입력">
                    </div>
                    <div class="mb-3 col-12">
                        <label for="ccbaAdmin1" class="form-label">관리자</label>
                        <input value="<?= $list-> ccbaAdmin ?>" type="text" class="form-control" id="ccbaAdmin1">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="ccbaCncl1" class="form-label">지정해제여부</label>
                        <input value="<?= $list-> ccbaCncl ?>" type="text" class="form-control" id="ccbaCncl1" placeholder="지정해제여부 입력">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="ccbaCndt1" class="form-label">지정해제일</label>
                        <input value="<?= $list-> ccbaCndt ?>" type="text" class="form-control" id="ccbaCndt1" placeholder="지정해제일 입력">
                    </div>
                    <div class="mb-3 col-12">
                        <label for="image1" class="form-label">이미지</label>
                        <input value="<?= $list-> imageUrl ?>" type="file" class="form-control" id="image1" placeholder="이미지 등록">
                    </div>
                    <div class="mb-3 col-12">
                        <label for="content1" class="form-label">설명</label>
                        <textarea class="form-control" id="content1" rows="5" placeholder="설명을 입력해주세요"><?= $list-> content ?></textarea>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="del btn btn-secondary">취소</button>
                    <button type="button" class="del btn btn-danger">삭제</button>
                    <button type="button" class="edit btn btn-primary">확인</button>
                </div>
            </div>
        </div>
    </section>