import 'bootstrap';
import 'popper.js';
import $ from "jquery";
import "datatables.net-bs5";
import "datatables.net-buttons-bs5";
import "datatables.net-responsive";
import "datatables.net-responsive-bs5";

$('#tableData').DataTable({
    responsive:true,
    dom: '<"wrapper"frtp>'
});