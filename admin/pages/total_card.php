<?php
include("../logics/common.php");
include("../components/sidebar.php");
?>
<style>
    /* General body and layout styles */
    body {
        font-family: Arial, sans-serif !important;
        background-color: white !important;
        color: #333 !important;
    }

    /* Styling the table container */
    .container {
        margin-top: 30px !important;
    }

    /* Table Styles */
    table {
        width: 100% !important;
        border-collapse: collapse !important;
    }

    /* Table header styles */
    th {
        background-color: #007BFF !important; /* Blue background */
        color: white !important;
        padding: 10px !important;
        text-align: left !important;
    }

    /* Table row styles */
    td {
        padding: 12px !important;
        text-align: left !important;
        border-bottom: 1px solid #ddd !important; /* Light gray border */
    }

    /* Table row hover effect */
    tr:hover {
        background-color: #f5f5f5 !important; /* Light gray on hover */
    }

    /* Search bar styles */
    .dataTables_filter {
        margin-top: 20px !important;
        width: 100% !important;
        padding: 10px !important;
        background-color: #f8f9fa !important; /* Light gray background */
        border-radius: 8px !important;
    }

    /* Styling the search input */
    .dataTables_filter input {
        width: 100% !important;
        padding: 10px !important;
        border: 2px solid #007BFF !important; /* Blue border */
        border-radius: 5px !important;
        background-color: #f0f8ff !important; /* Light blue background */
        font-size: 16px !important;
        color: #333 !important;
    }

    /* Placeholder text styling */
    .dataTables_filter input::placeholder {
        color: #aaa !important; /* Light gray placeholder text */
    }

    /* Styling for page title */
    h1 {
        font-size: 24px !important;
        color: #007BFF !important;
        margin-bottom: 20px !important;
    }

    /* Center-aligned pagination */
    .dataTables_paginate {
        text-align: center !important;
        margin-top: 20px !important;
    }

    /* Styling pagination buttons */
    .dataTables_paginate .paginate_button {
        background-color: white !important; /* White background */
        color: #007BFF !important; /* Blue text */
        border-radius: 5px !important;
        padding: 5px 15px !important;
        margin: 0 5px !important;
        border: 2px solid #007BFF !important; /* Blue border */
    }

    /* Pagination button hover effect */
    .dataTables_paginate .paginate_button:hover {
        background-color: #007BFF !important; /* Blue background on hover */
        color: white !important; /* White text on hover */
    }

    /* Pagination button active state */
    .dataTables_paginate .paginate_button.current {
        background-color: #007BFF !important; /* Blue background */
        color: white !important; /* White text */
        border: 2px solid #007BFF !important; /* Blue border */
    }

    /* Show entries selector */
    .dataTables_length {
        margin-top: 20px !important;
        text-align: left !important;
        color: #007BFF !important;
    }

    .dataTables_length select {
        padding: 8px 12px !important;
        border: 2px solid #007BFF !important;
        border-radius: 5px !important;
        background-color: #f0f8ff !important; /* Light blue background */
        color: #333 !important;
    }
</style>

<div id="main">

    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
                <div class="container">
                    <div class="col-12">
                        <h1>Total Cards</h1>
                        <table id="example" class="display ">
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Country</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>john@example.com</td>
                                    <td>+123456789</td>
                                    <td>USA</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jane Smith</td>
                                    <td>jane@example.com</td>
                                    <td>+987654321</td>
                                    <td>UK</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Ali Khan</td>
                                    <td>ali@example.com</td>
                                    <td>+1122334455</td>
                                    <td>Pakistan</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php
            include("../components/leftbar.php")
            ?>
        </section>
    </div>

    <?php
    include("../components/footer.php")
    ?>

    <script>
    $(document).ready(function() {
        // Initialize DataTable with combined options
        $('#example').DataTable({
            "paging": true,
            "searching": true,
            "info": true,
            "responsive": true,
            "language": {
                "search": "" // Remove the "Search:" label
            }
        });

        // Add a placeholder to the search input
        $('.dataTables_filter input').attr('placeholder', 'Search here...');
    });
    </script>
</div>
