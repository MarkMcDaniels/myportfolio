<div class="editable">
    <span class="fas fa-pen-square"></span>
    <div class="pop-up">
        <p class="modal-req"><span class="req-alert">*</span>You must have your picture in 'assets/images/' for your image to be recognized. The original image is 420 x 500 pixels</p>
        <form action="/updater.php" name="editProjectOne" method="post">
            <label>Project title:</label>
            <input type="text" name="project-one-title">
            <label>Picture file name:</label>
            <input id="project-one-path" type="text" name="project-one-path">
            <label>Project Description:</label>
            <textarea name="project-one-text" id="project-one-text" cols="30" rows="10"></textarea>
            <input type="hidden" name="action" value="project-one">
        </form>
        <button type="submit" form="editProjectOne">Save</button>
    </div>
</div>