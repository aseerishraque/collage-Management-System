<div class="col-lg-12">
    <div class="col-lg-4 col-sm-6 col-xs-12 main-widget">
        <div class="main-box infographic-box">
            <i class="fa fa-users red-bg"></i>
            <span class="headline">Students</span>
            <span class="value">
                <?php
					$c=mysqli_connect("localhost","root","","database") or die("No Connection");
                    $sql_sel=mysqli_query($c,"SELECT * FROM stu_tbl");
                    $count = mysqli_num_rows($sql_sel);
                    echo $count;
                ?>
            </span>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 col-xs-12 main-widget">
        <div class="main-box infographic-box">
            <i class="fa fa-users emerald-bg"></i>
            <span class="headline">Teachers</span>
            <span class="value">
                <?php
                    $sql_sel=mysqli_query($c,"SELECT * FROM teacher_tbl");
                    $count = mysqli_num_rows($sql_sel);
                    echo $count;
                ?>
            </span>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 col-xs-12 main-widget">
        <div class="main-box infographic-box">
            <i class="fa fa-user green-bg"></i>
            <span class="headline">Users</span>
            <span class="value">
                <?php
                    $sql_sel=mysqli_query($c,"SELECT * FROM users_tbl");
                    $count = mysqli_num_rows($sql_sel);
                    echo $count;
                ?>
            </span>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 col-xs-12 main-widget">
        <div class="main-box infographic-box">
            <i class="fa fa-fax orange-bg"></i>
            <span class="headline">Faculty</span>
            <span class="value">
                <?php
                $sql_sel=mysqli_query($c,"SELECT * FROM facuties_tbl");
                $count = mysqli_num_rows($sql_sel);
                echo $count;
                ?>
            </span>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 col-xs-12 main-widget">
        <div class="main-box infographic-box">
            <i class="fa fa-star yellow-bg"></i>
            <span class="headline">Subject</span>
            <span class="value">
                <?php
                $sql_sel=mysqli_query($c,"SELECT * FROM sub_tbl");
                $count = mysqli_num_rows($sql_sel);
                echo $count;
                ?>
            </span>
        </div>
    </div>
</div>