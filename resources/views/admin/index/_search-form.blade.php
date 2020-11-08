<form action="" method="get" class="my-3">
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col">
                    <select id="country" name="country" class="form-control js-select2">
                        <option value="">- Select country -</option>
                        <option value="VN">VietNam</option>
                        <option value="Lao">Lao</option>
                        <option value="CPC">Campuchia</option>
                        <option value="TL">Thai Lan</option>
                    </select>
                </div>

                <div class="col">
                    <select id="province" name="province" class="form-control js-select2">
                        <option value="">- Select province -</option>
                        <option value="HCM">Ho Chi Minh</option>
                        <option value="HN">Ha Noi</option>
                        <option value="DN">Da Nang</option>
                    </select>
                </div>

                <div class="col">
                    <select id="roles" name="roles" class="form-control js-select2" multiple="multiple" data-placeholder="Select roles">
                        <option value="USER">User</option>
                        <option value="ADMIN">Admin</option>
                        <option value="EDITOR">Editor</option>
                        <option value="MODERATOR">Moderator</option>
                    </select>
                </div>

                <div class="col">
                    <input id="keyword" name="keyword" type="text" class="form-control" placeholder="Keyword">
                </div>
            </div>
        </div>

        <div class="mr-3" style="width:230px">
            <div class="d-flex justify-content-end">
                <button type="reset" class="btn btn-outline-secondary mr-3"><i class="fa fa-refresh"></i></button>
                <button type="button" class="btn btn-outline-secondary mr-3" data-toggle="collapse" data-target="#advance-search">Adv Search <i class="fa fa-angle-down"></i></button>
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col">
            <div id="advance-search" style="background-color: #dee2e6; box-shadow: 0 6px 5px -4px rgba(0,0,0,0.29); z-index: 5;" class="w-100 py-3 px-3 collapse">
                <div class="row mb-2">
                    <div class="col">
                        <select id="area-group" name="area-group" class="form-control js-select2" style="width: 100%;">
                            <option value="">- Select area group -</option>
                            <option value="VN">VietNam</option>
                            <option value="Lao">Lao</option>
                            <option value="CPC">Campuchia</option>
                            <option value="TL">Thai Lan</option>
                        </select>
                    </div>

                    <div class="col">
                        <select id="area" name="area" class="form-control js-select2" style="width: 100%;">
                            <option value="">- Select area -</option>
                            <option value="HCM">Ho Chi Minh</option>
                            <option value="HN">Ha Noi</option>
                            <option value="DN">Da Nang</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col">
                        <select id="education" name="education" class="form-control js-select2" style="width: 100%;">
                            <option value="">- Select education -</option>
                            <option value="Bachelor">Bachelor</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Master">Master</option>
                            <option value="Professor">Professor</option>
                        </select>
                    </div>

                    <div class="col">
                        <select id="education-level" name="education-level" class="form-control js-select2" style="width: 100%;">
                            <option value="">- Select education level -</option>
                            <option value="Good">Good</option>
                            <option value="Bad">Bad</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col">
                        <select id="language" name="language" class="form-control js-select2" style="width: 100%;">
                            <option value="">- Select language -</option>
                            <option value="EN">English</option>
                            <option value="VN">Vietnamese</option>
                            <option value="JP">Japan</option>
                            <option value="FR">French</option>
                        </select>
                    </div>

                    <div class="col">
                        <select id="language-level" name="language-level" class="form-control js-select2" style="width: 100%;">
                            <option value="">- Select language level -</option>
                            <option value="NONE">None</option>
                            <option value="BEGINNER">Beginner</option>
                            <option value="MEDIUM">Medium</option>
                            <option value="FLUENTLY">Fluently</option>
                            <option value="NATIVE">Native</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>