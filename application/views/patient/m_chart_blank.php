<style type="text/css">
table {
    width: 100%;
    margin-top: 5px;
}
td {
    height: 20px;
}
textarea {
    margin: 5px 0 0 0;
    border-color: black;
    height: 80px;
}
.p_name {
    font-size: 18px;
}
.date_col {
    font-size: 22px;
    font-weight: bold;
}
img {
    position: absolute;
    margin-left: 25px;
}
</style>
    <center>
        <img height="80px" width="80px" src="uploads/favicon.png">
        <h1 style="font-size: 35px; margin: 0; padding: 0;"><?php echo strtoupper($this->db->get('settings')->row()->system_vendor);  ?></h1>
        <p style="margin: 0; padding: 0; font-size: 25px;"><?php echo $this->db->get('settings')->row()->address; ?></p>
        <p style=" margin: 0; padding: 0; font-size: 25px; font-weight: bold;"><?php echo strtoupper(lang('medicine').' '.lang('chart')); ?></p>
    </center>

        <table border="1px">
            <tr>
                <td><?php echo strtoupper('patient name').': <b class="p_name">'; ?></td>
                <td><?php echo strtoupper('age');?></td>
                <td><?php echo strtoupper('sex');?></td>
            </tr>
            <tr>
                <td><?php echo strtoupper('doctor Name');?></td>
                <td>Bed No: </td>
                <td>Reg. No: </td>
            </tr>
        </table>
        <table border="1px">
            <tr>
                <th><?php echo lang('date'); ?></th>
                <th><?php echo lang('time'); ?></th>
                <th><?php echo lang('dose'); ?></th>
                <th><?php echo lang('medicine').' '.lang('name'); ?></th>
                <th><?php echo lang('sign'); ?></th>
            </tr>
            <tr>
                <td rowspan="9">
        
                </td>
                <td rowspan="9"></td>
                <td></td>
                <td></td>
                <td rowspan="9"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td rowspan="9"></td>
                <td rowspan="9"></td>
                <td></td>
                <td></td>
                <td rowspan="9"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td rowspan="9"></td>
                <td rowspan="9"></td>
                <td></td>
                <td></td>
                <td rowspan="9"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>
<textarea>Note:</textarea>



