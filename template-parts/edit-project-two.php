<div class="editable">
    <span class="fas fa-pen-square"></span>
    <div class="pop-up">
        <p class="modal-req"><span class="req-alert">*</span>You must have your picture in 'assets/images/' for your image to be recognized. The original image is 420 x 500 pixels</p>
        <form class="edit-projects" action="#" name="editProjectTwo" method="post">
            <label>Project title:</label>
            <input type="text" name="project-two-title">
            <label>Picture file name:</label>
            <input id="project-two-path" type="text" name="project-two-path">
            <label>Project Description:</label>
            <textarea name="project-two-text" id="project-two-text" rows="10"></textarea>
            <input type="hidden" name="action" value="project-two">
        </form>
        <button type="submit" form="editProjectTwo">Save</button>
    </div>
</div>