<!-- 공연일정 수정 -->
<section>
    <div class="container" style="padding-top: 130px;">
        <h2>공연일정 수정</h2>
        <form>
            <div class="mb-3">
                <label class="form-label" for="showNameEdit">공연 이름</label>
                <input class="form-control" type="text" name="showNameEdit" value="<?= $list->showName ?>" id="showNameEdit" autocomplete="off" placeholder="이름을 입력해주세요." required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="showDateEdit">공연일자</label>
                <input class="form-control" type="date" name="showDateEdit" value="<?= $list->showDate ?>" id="showDateEdit" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="showTimeEdit">공연일시</label>
                <input class="form-control" type="time" name="showTimeEdit" value="<?= $list->showTime ?>" id="showTimeEdit" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="organizerEdit">주관</label>
                <input class="form-control" type="text" name="organizerEdit" value="<?= $list->organizer ?>" id="organizerEdit" autocomplete="off" placeholder="주관명을 입력해주세요.">
            </div>
            <div class="mb-3">
                <label class="form-label" for="placeEdit">공연장소</label>
                <input class="form-control" type="text" name="placeEdit" value="<?= $list->place ?>" id="placeEdit" autocomplete="off" placeholder="장소를 입력해주세요.">
            </div>
            <div class="mb-3">
                <label class="form-label" for="castEdit">출연진</label>
                <input class="form-control" type="text" name="castEdit" value="<?= $list->cast ?>" id="castEdit" autocomplete="off" placeholder="출연진을 쉼표로 구분하여 입력해주세요.">
            </div>
            <div class="mb-3">
                <label class="form-label" for="rmEdit">공연내용</label>
                <textarea class="form-control" name="rmEdit" id="rmEdit" rows="5" placeholder="공연의 내용을 입력해주세요."><?= $list->rm ?></textarea>
            </div>
            <input type="hidden" id="target" name="" value="<?= $list->showUid ?>">
            <button class="showEditcl btn btn-secondary">취소</button>
            <button class="showEdit btn btn-primary">수정</button>
            <button class="showDel btn btn-danger">삭제</button>
        </form>
    </div>
</section>
<script src="/resource/js/showEdit.js"></script>