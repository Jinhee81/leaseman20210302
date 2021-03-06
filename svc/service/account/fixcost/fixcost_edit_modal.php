<div class="modal fade bd-example-modal-sm" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">고정비 수정하기</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="p_fixcost_edit.php">
        <div class="modal-body">
          <div class="container">
            <div class="form-row">
              <div class="form-group col-md-4 mb-2">
                <label>관리물건</label>
              </div>
              <div class="form-group col-md-8 mb-2">
                <select class="form-control form-control-sm" name="buildingE" id="select2" readonly>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4 mb-2">
                <label>내역</label>
              </div>
              <div class="form-group col-md-8 mb-2">

              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4 mb-2">
                <label>금액</label>
              </div>
              <div class="form-group col-md-8 mb-2">
                <input type="text" class="form-control form-control-sm text-left amountNumber numberComma" name="amount1E" value="" numberOnly required>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptionsE" id="inlineRadio1E" value="vatYes" checked>
                  <label class="form-check-label" for="inlineRadio1">
                    <small>부가세 포함</small>
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptionsE" id="inlineRadio2E" value="vatNo">
                  <label class="form-check-label" for="inlineRadio2">
                    <small>부가세 별도</small>
                  </label>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4 mb-0">
                <p class="text-right">
                  <small>공급가액</small>
                </p>
              </div>
              <div class="form-group col-md-8 mb-0">
                <input type="text" class="form-control form-control-sm text-right grey numberComma" name="amount2E" value="" numberOnly required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4 mb-0">
                <p class="text-right">
                  <small>세액</small>
                </p>
              </div>
              <div class="form-group col-md-8 mb-0">
                <input type="text" class="form-control form-control-sm text-right grey numberComma" name="amount3E" value="" numberOnly required>
              </div>
            </div>
            </div>

          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">취소</button>
          <button type="submit" class="btn btn-primary" id="modalEditBtn">수정하기</button>
        </div>

      </form>
    </div>
  </div>
</div>
