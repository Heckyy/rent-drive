<body>

<div class="app-card-header p-3 main-content container-fluid">
    <div class="row justify-content-between align-items-center line">
        <div class="col-auto">
            <h6 class="app-card-title">
                Reservation Car
            </h6>
        </div>
    </div>
</div>

<div class="app-card-body pb-3 main-content container-fluid">
    <form method="POST" id="new">

        <div class="space_line row">
            <div class="col-sm-2 col-lg-2">
                Name
            </div>
            <div class="col-sm-2 col-lg-3">
                <input type="text" name="name" id="name" class="form-control square" required="required">
            </div>
        </div>
        <div class="space_line row">
            <div class="col-sm-2 col-lg-2">
                KK
            </div>
            <div class="col-sm-2 col-lg-2">
                <input type="text" name="kk" id="kk" class="form-control square">
            </div>
            <div class="col-sm-2 col-lg-2" align="right">
                KTP/ID
            </div>
            <div class="col-sm-2 col-lg-2">
                <input type="text" name="ktp" id="ktp" class="form-control square">
            </div>
        </div>
        <div class="col-lg-12" id="hitung"></div>
        <div class="space_line row">
            <div class="col-sm-2 col-lg-2">
                Note
            </div>
            <div class="col-sm-5 col-lg-5">
                <textarea  name="note" id="note" class="form-control square textarea-edit"></textarea>
            </div>
        </div>
        <div class="space_line row">
            <div class="col-sm-2 col-lg-2">
                Status
            </div>
            <div class="col-sm-2 col-lg-2">
                <select id="status" name="status" class="choices form-select square bg-white" required="required">
                    <option value="0">Active</option>
                    <option value="2">Not Active</option>
                </select>
            </div>
        </div>
        <div class="space_line row">
            <div class="col-lg-12">
                <button type="submit" id="btn" class="btn btn-sm btn-success btn-custom">Save</button>
            </div>
        </div>
    </form>

</div>

</body>