<?php include '../views/layout/header.php' ?>

<div class="container pt-5">
    <form>

        <legend>creat new job</legend>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">title</label>
            <input type="text" id="title" class="form-control" placeholder="title">
        </div>
        <div class="mb-3">
            <label for="disabledSelect" class="form-label">user</label>
            <select id="user_id" class="form-select">
                <option value="1">amine</option>
                <option value="3">nabile</option>
                <option value="4">hamza</option>
            </select>
        </div>

        <button type="button" onclick="insertData()" class="btn btn-primary">Submit</button>

    </form>
    <div id="result"></div>
    
    <span id="msg" class="badge text-bg-success"></span>
</div>

<?php include '../views/layout/footer.php' ?>