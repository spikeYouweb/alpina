<?IncludeModuleLangFile(__FILE__); if(strlen($_SESSION['PICKPOINT']['PP_NAME']) > 0) {
    $displayValue = 'block';
} else {
    $displayValue = 'none';
} ?>
<div class="bx_result_price">
<a onclick="PickPoint.open(PickpointHandler<?if ($str_from_city):?>, {fromcity:'<?=$str_from_city?>'}<?endif;?>);return false" style="cursor:pointer;"><?=GetMessage("PP_CHOOSE")?></a>
</div>

<table id="tPP" onclick="return false;" style="display:<?=$displayValue?>;">
    <tr>
        <td><?=GetMessage("PP_DELIVERY_IN_PLACE")?>:</td>
        <td>
        <?//arshow($str_from_city)?>
        <?//arshow($_SESSION['PICKPOINT'])?>
        <span id="sPPDelivery">
            <?=($_SESSION['PICKPOINT']['PP_ADDRESS']?$_SESSION['PICKPOINT']['PP_ADDRESS']."<br/>".$_SESSION['PICKPOINT']['PP_NAME']:GetMessage("PP_sNONE"))?>
        </span>
        </td>
    </tr>
    <tr>
        <td></td>
    </tr>
    <tr>
        <td><?=GetMessage("PP_SMS_PHONE")?>:</td>
        <td><input type="text" name="PP_SMS_PHONE" value="<?=htmlspecialcharsbx($_REQUEST["PP_SMS_PHONE"])?>" id="pp_sms_phone"/>
        <br/><?=GetMessage("PP_EXAMPLE")?>: +79160000000</td>
    </tr>
</table>
