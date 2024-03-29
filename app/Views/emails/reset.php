<!DOCTYPE html>
<html>

<head>

    <title>Welcome 2</title>
    <link rel="shortcut icon" href="favicon.ico">

    <style type="text/css">
        table[name="blk_permission"],
        table[name="blk_footer"] {
            display: none;
        }
    </style>

    <meta name="googlebot" content="noindex" />
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW" />
    <link rel="stylesheet" href="/style/dhtmlwindow.css" type="text/css" />
    <script type="text/javascript" src="/script/dhtmlwindow.js">
        /***********************************************
         * DHTML Window Widget- © Dynamic Drive (www.dynamicdrive.com)
         * This notice must stay intact for legal use.
         * Visit www.dynamicdrive.com for full source code
         ***********************************************/
    </script>
    <link rel="stylesheet" href="/style/modal.css" type="text/css" />
    <script type="text/javascript" src="/script/modal.js"></script>
    <script type="text/javascript">
        function show_popup(popup_name, popup_url, popup_title, width, height) {
            var widthpx = width + "px";
            var heightpx = height + "px";
            emailwindow = dhtmlmodal.open(popup_name, 'iframe', popup_url, popup_title, 'width=' + widthpx + ',height=' + heightpx + ',center=1,resize=0,scrolling=1');
        }

        function show_modal(popup_name, popup_url, popup_title, width, height) {
            var widthpx = width + "px";
            var heightpx = height + "px";
            emailwindow = dhtmlmodal.open(popup_name, 'iframe', popup_url, popup_title, 'width=' + widthpx + ',height=' + heightpx + ',modal=1,center=1,resize=0,scrolling=1');
        }
        var popUpWin = 0;

        function popUpWindow(URLStr, PopUpName, width, height) {
            if (popUpWin) {
                if (!popUpWin.closed) popUpWin.close();
            }
            var left = (screen.width - width) / 2;
            var top = (screen.height - height) / 2;
            popUpWin = open(URLStr, PopUpName, 'toolbar=0,location=0,directories=0,status=0,menub	ar=0,scrollbar=0,resizable=0,copyhistory=yes,width=' + width + ',height=' + height + ',left=' + left + ', 	top=' + top + ',screenX=' + left + ',screenY=' + top + '');
        }
    </script>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <style type="text/css">
        /*** BMEMBF Start ***/
        [name=bmeMainBody] {
            min-height: 1000px;
        }

        @media only screen and (max-width: 480px) {

            table.blk,
            table[name=tblText],
            .bmeHolder,
            .bmeHolder1,
            table[name=bmeMainColumn] {
                width: 100% !important;
            }
        }

        @media only screen and (max-width: 480px) {
            .bmeImageCard table.bmeImageTable {
                height: auto !important;
                width: 100% !important;
                padding: 20px !important;
                clear: both;
                float: left !important;
            }
        }

        @media only screen and (max-width: 480px) {
            .bmeImageCard table.bmeCaptionTable td[name=tblCell] {
                padding: 0px 20px 20px 20px !important;
            }
        }

        @media only screen and (max-width: 480px) {
            .bmeMblInline table.bmeImageTable {
                height: auto !important;
                width: 100% !important;
                padding: 10px !important;
                clear: both;
            }
        }

        @media only screen and (max-width: 480px) {
            .bmeMblInline table.bmeCaptionTable {
                width: 100% !important;
                clear: both;
            }
        }

        @media only screen and (max-width: 480px) {
            table.bmeImageTable {
                height: auto !important;
                width: 100% !important;
                padding: 10px !important;
                clear: both;
            }
        }

        @media only screen and (max-width: 480px) {
            table.bmeCaptionTable {
                width: 100% !important;
                clear: both;
            }
        }

        @media only screen and (max-width: 480px) {
            table.bmeImageContainer {
                width: 100% !important;
                clear: both;
                float: left !important;
            }
        }

        @media only screen and (max-width: 480px) {
            table.bmeCaptionTable td[name=tblCell] {
                padding: 10px !important;
            }
        }

        @media only screen and (max-width: 480px) {
            table.bmeImageTable td {
                padding: 0px !important;
                height: auto;
            }
        }

        @media only screen and (max-width: 480px) {
            td.bmeImageContainerRow {
                padding: 0px !important;
            }
        }

        @media only screen and (max-width: 480px) {
            table[name=tblGtr] {
                padding-bottom: 20px !important;
            }
        }

        @media only screen and (max-width: 480px) {

            td.blk_container,
            .blk_parent,
            [name=bmeLeftColumn],
            [name=bmeRightColumn],
            [name=bmeColumn1],
            [name=bmeColumn2],
            [name=bmeColumn3],
            [name=bmeBody] {
                display: table !important;
                max-width: 600px !important;
                width: 100% !important;
            }
        }

        @media only screen and (max-width: 480px) {
            img.mobile-img-large {
                width: 100% !important;
                height: auto !important;
            }
        }

        @media only screen and (max-width: 480px) {
            img.bmeRSSImage {
                max-width: 320px;
                height: auto !important;
            }
        }

        @media only screen and (min-width: 640px) {
            img.bmeRSSImage {
                max-width: 600px !important;
                height: auto !important;
            }
        }

        @media only screen and (max-width: 480px) {
            .trMargin img {
                height: 10px;
            }
        }

        @media only screen and (max-width: 480px) {

            table[class=container-table],
            .bmeheadertext,
            .container-table {
                width: 95% !important;
            }
        }

        @media only screen and (max-width: 480px) {

            .mobile-footer,
            .mobile-footer a {
                font-size: 13px !important;
                line-height: 18px !important;
            }

            .mobile-footer {
                text-align: center !important;
            }

            table[class="share-tbl"] {
                padding-bottom: 15px;
                width: 100% !important;
            }

            table[class="share-tbl"] td {
                display: block !important;
                text-align: center !important;
                width: 100% !important;
            }
        }

        @media only screen and (max-width: 480px) {

            div.bmefooter,
            div.bmeheader {
                display: block !important;
            }
        }

        @media only screen and (max-width: 480px) {
            .tdPart {
                width: 100% !important;
                clear: both;
                float: left !important;
            }
        }

        @media only screen and (max-width: 480px) {

            table.blk_parent1,
            table.tblPart {
                width: 100% !important;
            }
        }

        @media only screen and (max-width: 480px) {

            td[name=bmeShareTD],
            td[name=bmeSocialTD] {
                width: 100% !important;
            }
        }

        @media only screen and (max-width: 480px) {
            .tblLine {
                min-width: 100% !important;
            }
        }

        @media only screen and (max-width: 480px) {
            .bmeMblCenter img {
                margin: 0 auto;
            }
        }

        @media only screen and (max-width: 480px) {

            .bmeMblCenter,
            .bmeMblCenter div,
            .bmeMblCenter span {
                text-align: center !important;
                text-align: -webkit-center !important;
            }
        }

        @media only screen and (max-width: 480px) {

            .bmeNoBr br,
            .bmeImageGutterRow,
            .bmeMblStackCenter .bmeShareItem .tdMblHide {
                display: none !important;
            }
        }

        @media only screen and (max-width: 480px) {

            .bmeMblInline table.bmeImageTable,
            .bmeMblInline table.bmeCaptionTable,
            td.bmeMblInline {
                clear: none !important;
                width: 50% !important;
            }
        }

        @media only screen and (max-width: 480px) {

            .bmeMblInlineHide,
            .bmeShareItem .trMargin {
                display: none !important;
            }
        }

        @media only screen and (max-width: 480px) {

            .bmeMblInline table.bmeImageTable img,
            .bmeMblShareCenter.tblContainer.mblSocialContain,
            .bmeMblFollowCenter.tblContainer.mblSocialContain {
                width: 100% !important;
            }
        }

        @media only screen and (max-width: 480px) {
            .bmeMblStack>.bmeShareItem {
                width: 100% !important;
                clear: both !important;
            }
        }

        @media only screen and (max-width: 480px) {
            .bmeShareItem {
                padding-top: 10px !important;
            }
        }

        @media only screen and (max-width: 480px) {

            .tdPart.bmeMblStackCenter,
            .bmeMblStackCenter .bmeFollowItemIcon {
                padding: 0px !important;
                text-align: center !important;
            }
        }

        @media only screen and (max-width: 480px) {
            .bmeMblStackCenter>.bmeShareItem {
                width: 100% !important;
            }
        }

        @media only screen and (max-width: 480px) {
            td.bmeMblCenter {
                border: 0 none transparent !important;
                padding: 0 !important;
            }
        }

        @media only screen and (max-width: 480px) {
            .bmeLinkTable.tdPart td {
                padding-left: 0px !important;
                padding-right: 0px !important;
                border: 0px none transparent !important;
                padding-bottom: 15px !important;
                height: auto !important;
            }
        }

        @media only screen and (max-width: 480px) {
            .tdMblHide {
                width: 10px !important;
            }
        }

        @media only screen and (max-width: 480px) {
            .bmeShareItemBtn {
                display: table !important;
            }
        }

        @media only screen and (max-width: 480px) {
            .bmeMblStack td {
                text-align: left !important;
            }
        }

        @media only screen and (max-width: 480px) {
            .bmeMblStack .bmeFollowItem {
                clear: both !important;
                padding-top: 10px !important;
            }
        }

        @media only screen and (max-width: 480px) {
            .bmeMblStackCenter .bmeFollowItemText {
                padding-left: 5px !important;
            }
        }

        @media only screen and (max-width: 480px) {
            .bmeMblStackCenter .bmeFollowItem {
                clear: both !important;
                align-self: center;
                float: none !important;
                padding-top: 10px;
            }
        }

        @media only screen and (max-width: 480px) {
            td[name=tdBoxedTextBorder] {
                width: auto !important;
            }
        }

        .blk_parent:first-child,
        .blk_parent {
            float: left;
        }

        .blk_parent:last-child {
            float: right;
        }

        table[name="bmeMainBody"],
        body {
            background-color: #2c2929;
        }

        td[name="bmePreHeader"] {
            background-color: #2c2929;
        }

        td[name="bmeHeader"] {
            background: #ffffff;
        }

        td[name="bmeBody"],
        table[name="bmeBody"] {
            background-color: #ffffff;
        }

        td[name="bmePreFooter"] {
            background-color: #2c2929;
        }

        td[name="bmeFooter"] {
            background-color: transparent;
        }

        td[name="tblCell"],
        .blk {
            font-family: initial;
            font-weight: normal;
            font-size: initial;
        }

        table[name="blk_blank"] td[name="tblCell"] {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
        }

        [name=bmeMainColumnParent] {
            border-color: transparent;
            border-width: 0px;
            border-style: none;
            border-radius: 0px;
            border-collapse: separate;
            border-spacing: 0px;
            overflow: visible;
        }

        [name=bmeMainContentParent] {
            border-color: transparent;
            border-width: 0px;
            border-style: none;
            border-radius: 0px;
            overflow: hidden;
        }

        [name=bmeMainContent] {
            border-color: transparent;
            border-width: 0px;
            border-style: none;
            border-radius: 0px;
            border-collapse: separate;
            border-spacing: 0px;
            overflow: visible;
        }
    </style>
</head>

<body marginheight=0 marginwidth=0 topmargin=0 leftmargin=0 style="height: 100% !important; margin: 0; padding: 0; width: 100% !important;min-width: 100%;">

    <table name="bmeMainBody" style="background-color: rgb(44, 41, 41);" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#2c2929">
        <tbody>
            <tr>
                <td width="100%" valign="top" align="center">
                    <table name="bmeMainColumnParentTable" width="100%" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                            <tr>
                                <td name="bmeMainColumnParent" style="border: 0px none transparent; border-radius: 0px; /*! border-collapse: separate; */ border-spacing: 0px;">
                                    <table name="bmeMainColumn" class="" style="max-width: 100%; overflow: visible;" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                        <tbody>
                                            <tr>
                                                <td class="blk_container bmeHolder" name="bmePreHeader" style="/*! color: rgb(102, 102, 102); */ border: 0px none transparent; background-color: rgb(44, 41, 41);" width="100%" valign="top" bgcolor="#2c2929" align="center">
                                                    <div id="dv_2" class="blk_wrapper">
                                                        <table class="blk" name="blk_permission" width="600" cellspacing="0" cellpadding="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td name="tblCell" style="padding:20px;" valign="top" align="left">
                                                                        <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td name="bmePermissionText" style="text-align:left;" align="left"><span style="font-family: Arial, Helvetica, sans-serif; font-weight: normal; font-size: 11px;line-height: 140%;"><a style="color: #16a7e0;" target="_new" href="[ViewWebURL]">View this email in your browser</a></span></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bmeHolder" name="bmeMainContentParent" style="border: 0px none transparent; border-radius: 0px; border-collapse: separate; border-spacing: 0px; overflow: hidden;" width="100%" valign="top" align="center">
                                                    <table name="bmeMainContent" style="border-radius: 0px; border-collapse: separate; border-spacing: 0px; border: 0px none transparent;" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                                        <tbody>
                                                            <tr>
                                                                <td class="blk_container bmeHolder" name="bmeHeader" style="color: rgb(56, 56, 56); border: 0px none transparent; background-color: rgb(255, 255, 255);" width="100%" valign="top" bgcolor="#ffffff" align="center">
                                                                    <div id="dv_1" class="blk_wrapper">
                                                                        <table class="blk" name="blk_text" width="600" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <table class="bmeContainerRow" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td class="tdPart" valign="top" align="center">
                                                                                                        <table name="tblText" style="float:left; background-color:transparent;" width="600" cellspacing="0" cellpadding="0" border="0" align="left">
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td name="tblCell" style="padding: 20px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: normal; color: rgb(56, 56, 56); text-align: left;" valign="top" align="left">
                                                                                                                        <div style="line-height: 150%; text-align: center;"><span style="font-size: 16px; font-family: 'Arial Black', 'Arial Bold', sans-serif; color: #2c2929; line-height: 150%;"></span></div>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div id="dv_9" class="blk_wrapper">
                                                                        <table class="blk" name="blk_divider" style="background-color: rgb(44, 41, 41);" width="600" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="tblCellMain" style="padding-top:20px; padding-bottom:20px;padding-left:20px;padding-right:20px;">
                                                                                        <table class="tblLine" style="border-top-width: 0px; border-top-style: none; min-width: 1px;" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td><span></span></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div id="dv_3" class="blk_wrapper">
                                                                        <table class="blk" name="blk_image" width="600" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <!-- Colocar Logo aqui -->
                                                                                                    <!-- <td class="bmeImage" style="padding: 0px 20px; border-collapse: collapse; background-color: rgb(44, 41, 41);" align="center"><img src="https://www.benchmarkemail.com/images/templates_n/new_editor/Templates/Welcome2/Logo.png" style="max-width: 75px; display: block; width: 75px;" alt="" width="75" border="0"></td> -->
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div id="dv_11" class="blk_wrapper">
                                                                        <table class="blk" name="blk_text" width="600" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <table class="bmeContainerRow" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td class="tdPart" style="background-color: rgb(44, 41, 41);" valign="top" align="center">
                                                                                                        <table name="tblText" style="float: left; background-color: rgb(44, 41, 41);" width="600" cellspacing="0" cellpadding="0" border="0" align="left">
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td name="tblCell" style="padding: 20px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: normal; color: rgb(56, 56, 56); text-align: left;" valign="top" align="left">
                                                                                                                        <!-- <div style="line-height: 200%; text-align: center;"><br><br><span style="font-size: 14px; font-family: Arial, Helvetica, sans-serif; color: #ffffff; line-height: 200%;"></span></div> -->
                                                                                                                        <div style="line-height: 200%; text-align: center;"><span style="font-family: 'Arial Black', 'Arial Bold', sans-serif; font-size: 36px; color: #ffffff; line-height: 200%;">Ola, <?= $name ?></span><br><br><span style="font-size: 14px; font-family: Arial, Helvetica, sans-serif; color: #ffffff; line-height: 200%;">Para você resetar sua senha, clique no link a seguir, esse link é válido por 5 minutos. </span><br><a href="<?= base_url("reset/{$token}") ?>" style="color: white">Clique aqui para resetar sua senha</a></div>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div id="dv_26" class="blk_wrapper">
                                                                        <table class="blk" name="blk_divider" style="background-color: rgb(44, 41, 41);" width="600" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="tblCellMain" style="padding-top:20px; padding-bottom:20px;padding-left:20px;padding-right:20px;">
                                                                                        <table class="tblLine" style="border-top-width: 0px; border-top-style: none; min-width: 1px;" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td><span></span></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="blk_container bmeHolder" name="bmeBody" style="color: rgb(56, 56, 56); border: 0px none transparent; background-color: rgb(255, 255, 255);" width="100%" valign="top" bgcolor="#ffffff" align="center">


                                                                    <div id="dv_4" class="blk_wrapper">
                                                                        <table class="blk" name="blk_divider" width="600" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="tblCellMain" style="padding-top:20px; padding-bottom:20px;padding-left:20px;padding-right:20px;">
                                                                                        <table class="tblLine" style="border-top-width: 0px; border-top-style: none; min-width: 1px;" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td><span></span></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div id="dv_5" class="blk_wrapper">
                                                                        <table class="blk" name="blk_text" width="600" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <table class="bmeContainerRow" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td class="tdPart" valign="top" align="center">
                                                                                                        <table name="tblText" style="float:left; background-color:transparent;" width="300" cellspacing="0" cellpadding="0" border="0" align="left">
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td name="tblCell" style="padding: 20px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: normal; color: rgb(56, 56, 56); text-align: left;" class="bmeMblCenter" valign="top" align="left">
                                                                                                                        <div style="line-height: 200%;"><span style="font-size: 16px; font-family: 'Arial Black', 'Arial Bold', sans-serif; color: #2c2929; line-height: 200%;">OUR WORK.</span><br><br><span style="font-size: 14px; color: #a3a3a3; font-family: Arial, Helvetica, sans-serif; line-height: 200%;">You are totally stoked about the piece of information that goes here and your subscribers will be too.</span></div>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                    <td class="tdPart" valign="top" align="center">
                                                                                                        <table name="tblGtr" style="float:right;" width="0" cellspacing="0" cellpadding="0" border="0" align="right">
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td> </td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                    <td class="tdPart" valign="top" align="center">
                                                                                                        <table name="tblText" style="float:right;" width="300" cellspacing="0" cellpadding="0" border="0" align="right">
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td name="tblCell" style="padding: 20px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: normal; color: rgb(56, 56, 56); text-align: left;" class="bmeMblCenter" valign="top" align="left">
                                                                                                                        <div style="line-height: 200%;"><span style="font-size: 16px; font-family: 'Arial Black', 'Arial Bold', sans-serif; color: #2c2929; line-height: 200%;">GREAT SUPPORT.</span><br><br><span style="font-size: 14px; color: #a3a3a3; font-family: Arial, Helvetica, sans-serif; line-height: 200%;">You are totally stoked about the piece of information that goes here and your subscribers will be too.</span></div>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div id="dv_7" class="blk_wrapper">
                                                                        <table class="blk" name="blk_text" width="600" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <table class="bmeContainerRow" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td class="tdPart" valign="top" align="center">
                                                                                                        <table name="tblText" style="float:left; background-color:transparent;" width="300" cellspacing="0" cellpadding="0" border="0" align="left">
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td name="tblCell" style="padding: 20px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: normal; color: rgb(56, 56, 56); text-align: left;" class="bmeMblCenter" valign="top" align="left">
                                                                                                                        <div style="line-height: 200%;"><span style="font-size: 16px; font-family: 'Arial Black', 'Arial Bold', sans-serif; color: #2c2929; line-height: 200%;">PRO QUALITY.</span><br><br><span style="font-size: 14px; color: #a3a3a3; font-family: Arial, Helvetica, sans-serif; line-height: 200%;">You are totally stoked about the piece of information that goes here and your subscribers will be too.</span></div>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                    <td class="tdPart" valign="top" align="center">
                                                                                                        <table name="tblGtr" style="float:right;" width="0" cellspacing="0" cellpadding="0" border="0" align="right">
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td> </td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                    <td class="tdPart" valign="top" align="center">
                                                                                                        <table name="tblText" style="float:right;" width="300" cellspacing="0" cellpadding="0" border="0" align="right">
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td name="tblCell" style="padding: 20px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: normal; color: rgb(56, 56, 56); text-align: left;" class="bmeMblCenter" valign="top" align="left">
                                                                                                                        <div style="line-height: 200%;"><span style="font-size: 16px; font-family: 'Arial Black', 'Arial Bold', sans-serif; color: #2c2929; line-height: 200%;">1000+ MEMBERS</span><br><br><span style="font-size: 14px; color: #a3a3a3; font-family: Arial, Helvetica, sans-serif; line-height: 200%;">You are totally stoked about the piece of information that goes here and your subscribers will be too.</span></div>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div id="dv_6" class="blk_wrapper">
                                                                        <table class="blk" name="blk_button" width="600" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width="40"></td>
                                                                                    <td align="center">
                                                                                        <table class="tblContainer" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td height="20"></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td align="center">
                                                                                                        <table class="bmeButton" style="border-collapse: separate;" cellspacing="0" cellpadding="0" border="0" align="center">
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td style="border-radius: 0px; border: 0px none transparent; text-align: center; font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding: 15px 40px; font-weight: bold; background-color: rgb(44, 41, 41);" class="bmeButtonText"><span style="font-family: 'Arial Black', 'Arial Bold', sans-serif; font-size: 14px; color: rgb(255, 255, 255);"><a href="<?= url_to('home') ?>" style="color:#FFFFFF;text-decoration:none;" target="_blank">VIEW MORE</a></span></td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td height="20"></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                    <td width="40"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div id="dv_13" class="blk_wrapper">
                                                                        <table class="blk" name="blk_divider" width="600" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="tblCellMain" style="padding-top:20px; padding-bottom:20px;padding-left:20px;padding-right:20px;">
                                                                                        <table class="tblLine" style="border-top-width: 0px; border-top-style: none; min-width: 1px;" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td><span></span></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div id="dv_27" class="blk_wrapper">
                                                                        <table class="blk" name="blk_divider" style="background-color: rgb(44, 41, 41);" width="600" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="tblCellMain" style="padding-top:20px; padding-bottom:20px;padding-left:20px;padding-right:20px;">
                                                                                        <table class="tblLine" style="border-top-width: 0px; border-top-style: none; min-width: 1px;" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td><span></span></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div id="dv_12" class="blk_wrapper">
                                                                        <table class="blk" name="blk_text" width="600" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <table class="bmeContainerRow" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td class="tdPart" style="background-color: rgb(44, 41, 41);" valign="top" align="center">
                                                                                                        <table name="tblText" style="float: left; background-color: rgb(44, 41, 41);" width="600" cellspacing="0" cellpadding="0" border="0" align="left">
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td name="tblCell" style="padding: 20px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: normal; color: rgb(56, 56, 56); text-align: left;" valign="top" align="left">
                                                                                                                        <div style="line-height: 200%; text-align: center;"><span style="font-family: 'Arial Black', 'Arial Bold', sans-serif; font-size: 30px; color: #ffffff; line-height: 200%;">OUR WORK</span><br><br><span style="font-size: 14px; font-family: Arial, Helvetica, sans-serif; color: #ffffff; line-height: 200%;">Your intro copy was exciting enough to keep your subscribers reading. Let's continue that trend here!</span></div>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div id="dv_16" class="blk_wrapper">
                                                                        <table class="blk" name="blk_group" style="background-color: rgb(44, 41, 41);" width="600" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <table class="bmeGroupContainer" layout="24" style="border-collapse:separate;padding-top:10px; padding-bottom:10px; padding-left:20px; padding-right:20px; border-width:0px; border-style:none; border-color:rgba(0, 0, 0, 0);" width="100%" cellspacing="0" cellpadding="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td class="bmeImageContainerRow" valign="top">
                                                                                                        <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td class="tdPart" valign="top" align="center">
                                                                                                                        <table class="bmeImageTable" imgid="1" width="173" cellspacing="0" cellpadding="0" border="0" align="left">
                                                                                                                            <tbody>
                                                                                                                                <tr>
                                                                                                                                    <td name="bmeImgHolder" valign="top" align="center"><img src="https://www.benchmarkemail.com/images/templates_n/new_editor/Templates/Welcome2/Project1.jpg" style="max-width: 352px; display: block;" width="173"></td>
                                                                                                                                </tr>
                                                                                                                            </tbody>
                                                                                                                        </table>
                                                                                                                    </td>
                                                                                                                    <td class="bmeImageGutterRow" gutter="20" valign="top" align="center">
                                                                                                                        <table width="20" cellspacing="0" cellpadding="0" border="0">
                                                                                                                            <tbody>
                                                                                                                                <tr>
                                                                                                                                    <td></td>
                                                                                                                                </tr>
                                                                                                                            </tbody>
                                                                                                                        </table>
                                                                                                                    </td>
                                                                                                                    <td class="tdPart" valign="top" align="center">
                                                                                                                        <table class="bmeImageTable" imgid="2" width="174" cellspacing="0" cellpadding="0" border="0" align="left">
                                                                                                                            <tbody>
                                                                                                                                <tr>
                                                                                                                                    <td name="bmeImgHolder" valign="top" align="center"><img src="https://www.benchmarkemail.com/images/templates_n/new_editor/Templates/Welcome2/Project2.jpg" style="max-width: 352px; display: block;" width="174"></td>
                                                                                                                                </tr>
                                                                                                                            </tbody>
                                                                                                                        </table>
                                                                                                                    </td>
                                                                                                                    <td class="bmeImageGutterRow" gutter="20" valign="top" align="center">
                                                                                                                        <table width="20" cellspacing="0" cellpadding="0" border="0">
                                                                                                                            <tbody>
                                                                                                                                <tr>
                                                                                                                                    <td></td>
                                                                                                                                </tr>
                                                                                                                            </tbody>
                                                                                                                        </table>
                                                                                                                    </td>
                                                                                                                    <td class="tdPart" valign="top" align="center">
                                                                                                                        <table class="bmeImageTable" imgid="3" width="173" cellspacing="0" cellpadding="0" border="0" align="right">
                                                                                                                            <tbody>
                                                                                                                                <tr>
                                                                                                                                    <td name="bmeImgHolder" valign="top" align="center"><img src="https://www.benchmarkemail.com/images/templates_n/new_editor/Templates/Welcome2/Project3.jpg" style="max-width: 352px; display: block;" width="173"></td>
                                                                                                                                </tr>
                                                                                                                            </tbody>
                                                                                                                        </table>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div id="dv_14" class="blk_wrapper">
                                                                        <table class="blk" name="blk_button" style="background-color: rgb(44, 41, 41);" width="600" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width="40"></td>
                                                                                    <td align="center">
                                                                                        <table class="tblContainer" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td height="20"></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td align="center">
                                                                                                        <table class="bmeButton" style="border-collapse: separate;" cellspacing="0" cellpadding="0" border="0" align="center">
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td style="border-radius: 0px; border: 0px none transparent; text-align: center; font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding: 15px 40px; font-weight: bold; background-color: rgb(255, 255, 255);" class="bmeButtonText"><span style="font-family: 'Arial Black', 'Arial Bold', sans-serif; font-size: 14px; color: rgb(44, 41, 41);"><a href="<?= url_to('home') ?>" style="color: rgb(44, 41, 41); text-decoration: none;" target="_blank">VIEW MORE</a></span></td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td height="20"></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                    <td width="40"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div id="dv_28" class="blk_wrapper">
                                                                        <table class="blk" name="blk_divider" style="background-color: rgb(44, 41, 41);" width="600" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="tblCellMain" style="padding-top:20px; padding-bottom:20px;padding-left:20px;padding-right:20px;">
                                                                                        <table class="tblLine" style="border-top-width: 0px; border-top-style: none; min-width: 1px;" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td><span></span></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div id="dv_18" class="blk_wrapper">
                                                                        <table class="blk" name="blk_divider" width="600" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="tblCellMain" style="padding-top:20px; padding-bottom:20px;padding-left:20px;padding-right:20px;">
                                                                                        <table class="tblLine" style="border-top-width: 0px; border-top-style: none; min-width: 1px;" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td><span></span></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div id="dv_17" class="blk_wrapper">
                                                                        <table class="blk" name="blk_text" width="600" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <table class="bmeContainerRow" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td class="tdPart" valign="top" align="center">
                                                                                                        <table name="tblText" style="float:left; background-color:transparent;" width="300" cellspacing="0" cellpadding="0" border="0" align="left">
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td name="tblCell" style="padding: 20px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: normal; color: rgb(56, 56, 56); text-align: left;" class="bmeMblCenter" valign="top" align="left">
                                                                                                                        <div style="line-height: 200%;"><span style="font-size: 16px; font-family: 'Arial Black', 'Arial Bold', sans-serif; color: #2c2929; line-height: 200%;">PRO QUALITY.</span><br><br><span style="font-size: 14px; color: #a3a3a3; font-family: Arial, Helvetica, sans-serif; line-height: 200%;">You are totally stoked about the piece of information that goes here and your subscribers will be too.</span></div>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                    <td class="tdPart" valign="top" align="center">
                                                                                                        <table name="tblGtr" style="float:right;" width="0" cellspacing="0" cellpadding="0" border="0" align="right">
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td> </td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                    <td class="tdPart" valign="top" align="center">
                                                                                                        <table name="tblText" style="float:right;" width="300" cellspacing="0" cellpadding="0" border="0" align="right">
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td name="tblCell" style="padding: 20px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: normal; color: rgb(56, 56, 56); text-align: left;" class="bmeMblCenter" valign="top" align="left">
                                                                                                                        <div style="line-height: 200%;"><span style="font-size: 16px; font-family: 'Arial Black', 'Arial Bold', sans-serif; color: #2c2929; line-height: 200%;">1000+ MEMBERS</span><br><br><span style="font-size: 14px; color: #a3a3a3; font-family: Arial, Helvetica, sans-serif; line-height: 200%;">You are totally stoked about the piece of information that goes here and your subscribers will be too.</span></div>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div id="dv_20" class="blk_wrapper">
                                                                        <table class="blk" name="blk_text" width="600" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <table class="bmeContainerRow" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td class="tdPart" valign="top" align="center">
                                                                                                        <table name="tblText" style="float:left; background-color:transparent;" width="600" cellspacing="0" cellpadding="0" border="0" align="left">
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td name="tblCell" style="padding: 20px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: normal; color: rgb(56, 56, 56); text-align: left;" class="" valign="top" align="left">
                                                                                                                        <div style="line-height: 200%;"><span style="font-size: 16px; font-family: 'Arial Black', 'Arial Bold', sans-serif; color: #2c2929; line-height: 200%;">ANY QUESTIONS? GET IN TOUCH WITH US.</span><br><br><span style="font-size: 14px; color: #a3a3a3; font-family: Arial, Helvetica, sans-serif; line-height: 200%;">You know how when something totally awesome happens during your day and you cannot wait to share the story with a significant other, family or friends? You rush home or dial as fast as you can and it's the first thing that's blurted out of your mouth after pleasantries. This section is that story.</span></div>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div id="dv_15" class="blk_wrapper">
                                                                        <table class="blk" name="blk_divider" width="600" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="tblCellMain" style="padding-top:20px; padding-bottom:20px;padding-left:20px;padding-right:20px;">
                                                                                        <table class="tblLine" style="border-top-width: 0px; border-top-style: none; min-width: 1px;" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td><span></span></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="blk_container bmeHolder" name="bmePreFooter" style="color: rgb(56, 56, 56); border: 0px none transparent; background-color: rgb(44, 41, 41);" width="100%" valign="top" bgcolor="#2c2929" align="center">
                                                                    <div id="dv_29" class="blk_wrapper">
                                                                        <table class="blk" name="blk_divider" width="600" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="tblCellMain" style="padding-top:20px; padding-bottom:20px;padding-left:20px;padding-right:20px;">
                                                                                        <table class="tblLine" style="border-top-width: 0px; border-top-style: none; min-width: 1px;" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td><span></span></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div id="dv_22" class="blk_wrapper">
                                                                        <table class="blk" name="blk_image" width="600" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td class="bmeImage" style="padding: 0px 20px; border-collapse: collapse;" align="center"><img src="https://www.benchmarkemail.com/images/templates_n/new_editor/Templates/Welcome2/Logo.png" style="max-width: 75px; display: block; width: 75px;" alt="" width="75" border="0"></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div id="dv_21" class="blk_wrapper">
                                                                        <table class="blk" name="blk_text" width="600" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <table class="bmeContainerRow" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td class="tdPart" style="background-color: rgb(44, 41, 41);" valign="top" align="center">
                                                                                                        <table name="tblText" style="float: left; background-color: rgb(44, 41, 41);" width="600" cellspacing="0" cellpadding="0" border="0" align="left">
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td name="tblCell" style="padding: 20px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: normal; color: rgb(56, 56, 56); text-align: left;" valign="top" align="left">
                                                                                                                        <div style="line-height: 200%; text-align: center;"><span style="font-family: 'Arial Black', 'Arial Bold', sans-serif; font-size: 30px; color: #ffffff; line-height: 200%;">VISIT OUR SHOP</span><br><br><span style="font-size: 14px; font-family: Arial, Helvetica, sans-serif; color: #ffffff; line-height: 200%;">You put hard work into designing your email campaign and this section is that first thing you cannot wait to share. You're excited about it and your subscribers will feel that. They'll obviously want to hear everything else you have to say after that as well.</span></div>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div id="dv_19" class="blk_wrapper">
                                                                        <table class="blk" name="blk_divider" width="600" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="tblCellMain" style="padding-top:20px; padding-bottom:20px;padding-left:20px;padding-right:20px;">
                                                                                        <table class="tblLine" style="border-top-width: 0px; border-top-style: none; min-width: 1px;" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td><span></span></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div id="dv_24" class="blk_wrapper">
                                                                        <table class="blk" name="blk_divider" width="600" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="tblCellMain" style="padding-top:20px; padding-bottom:20px;padding-left:20px;padding-right:20px;">
                                                                                        <table class="tblLine" style="border-top-width: 1px; border-top-color: rgb(58, 54, 54); border-top-style: solid; min-width: 1px;" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td><span></span></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div id="dv_30" class="blk_wrapper">
                                                                        <table class="blk" name="blk_divider" width="600" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="tblCellMain" style="padding-top:20px; padding-bottom:20px;padding-left:20px;padding-right:20px;">
                                                                                        <table class="tblLine" style="border-top-width: 0px; border-top-style: none; min-width: 1px;" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td><span></span></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div id="dv_25" class="blk_wrapper">
                                                                        <table class="blk" name="blk_text" width="600" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <table class="bmeContainerRow" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td class="tdPart" valign="top" align="center">
                                                                                                        <table name="tblText" style="float:left; background-color:transparent;" width="600" cellspacing="0" cellpadding="0" border="0" align="left">
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td name="tblCell" style="padding-top: 10px; padding-bottom:10px; padding-left:20px; padding-right:20px; font-family: Arial,Helvetica,sans-serif; font-size: 14px; font-weight: normal; color: #383838; text-align: left;" valign="top" align="left">
                                                                                                                        <div style="line-height: 200%; text-align: center;"><span style="font-size: 16px; font-family: 'Arial Black', 'Arial Bold', sans-serif; color: #ffffff; line-height: 200%;">SOCIAL MEDIA.</span></div>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div id="dv_8" class="blk_wrapper">
                                                                        <table name="blk_social_follow" class="blk" width="600" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="tblCellMain" style="padding-top:10px; padding-bottom:10px; padding-left:20px; padding-right:20px;" align="center">
                                                                                        <table class="tblContainer mblSocialContain" style="text-align:center;" cellspacing="0" cellpadding="0" border="0" align="center">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td class="tdItemContainer">
                                                                                                        <table class="mblSocialContain" style="table-layout: auto;" cellspacing="0" cellpadding="0" border="0">
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td name="bmeSocialTD" valign="top"><!--[if gte mso 6]></td><td align="left" valign="top"><![endif]-->
                                                                                                                        <table class="bmeFollowItem" type="facebook" style="float: left; display: block;" cellspacing="0" cellpadding="0" border="0" align="left">
                                                                                                                            <tbody>
                                                                                                                                <tr>
                                                                                                                                    <td class="bmeFollowItemIcon" gutter="20" style="padding-right:20px;height:55px;" width="24" align="left"><a href="http://www.facebook.com" style="display: inline-block;background-color: rgb(163, 163, 163);border-radius: 6px;border-style: none; border-width: 0px; border-color: rgba(0, 0, 0, 0);" target="_blank"><img src="https://ui.benchmarkemail.com/images/editor/socialicons/fb_btn.png" alt="Facebook" style="display: block; max-width: 114px;" width="57" height="57" border="0"></a></td>
                                                                                                                                </tr>
                                                                                                                            </tbody>
                                                                                                                        </table><!--[if gte mso 6]></td><td align="left" valign="top"><![endif]-->
                                                                                                                        <table class="bmeFollowItem" type="instagram" style="float: left; display: block;" cellspacing="0" cellpadding="0" border="0" align="left">
                                                                                                                            <tbody>
                                                                                                                                <tr>
                                                                                                                                    <td class="bmeFollowItemIcon" gutter="20" style="padding-right:20px;height:55px;" width="24" align="left"><a href="http://instagram.com" style="display: inline-block;background-color: rgb(163, 163, 163);border-radius: 6px;border-style: none; border-width: 0px; border-color: rgba(0, 0, 0, 0);" target="_blank"><img src="https://ui.benchmarkemail.com/images/editor/socialicons/in_btn.png" alt="Instagram" style="display: block; max-width: 114px;" width="57" height="57" border="0"></a></td>
                                                                                                                                </tr>
                                                                                                                            </tbody>
                                                                                                                        </table><!--[if gte mso 6]></td><td align="left" valign="top"><![endif]-->
                                                                                                                        <table class="bmeFollowItem" type="twitter" style="float: left; display: block;" cellspacing="0" cellpadding="0" border="0" align="left">
                                                                                                                            <tbody>
                                                                                                                                <tr>
                                                                                                                                    <td class="bmeFollowItemIcon" gutter="20" style="height:55px;" width="24" align="left"><a href="http://twitter.com" style="display: inline-block;background-color: rgb(163, 163, 163);border-radius: 6px;border-style: none; border-width: 0px; border-color: rgba(0, 0, 0, 0);" target="_blank"><img src="https://ui.benchmarkemail.com/images/editor/socialicons/tw_btn.png" alt="Twitter" style="display: block; max-width: 114px;" width="57" height="57" border="0"></a></td>
                                                                                                                                </tr>
                                                                                                                            </tbody>
                                                                                                                        </table>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div id="dv_23" class="blk_wrapper">
                                                                        <table class="blk" name="blk_divider" width="600" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="tblCellMain" style="padding-top:20px; padding-bottom:20px;padding-left:20px;padding-right:20px;">
                                                                                        <table class="tblLine" style="border-top-width: 0px; border-top-style: none; min-width: 1px;" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td><span></span></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="blk_container bmeHolder" name="bmeFooter" style="color: rgb(102, 102, 102); border: 0px none transparent;" width="100%" valign="top" bgcolor="" align="center">
                                                    <div id="dv_10" class="blk_wrapper">
                                                        <table class="blk" name="blk_footer" width="600" cellspacing="0" cellpadding="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td name="tblCell" style="padding:20px;" valign="top" align="left">
                                                                        <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td name="bmeBadgeText" style="text-align:left; word-break: break-all;" align="left"><span id="spnFooterText" style="font-family: Arial, Helvetica, sans-serif; font-weight: normal; font-size: 11px; line-height: 140%;"><var type="BME_CANSPAM">This message was sent to test@benchmarkemail.com by <span style="text-decoration:underline;">Benchmark Templates</span></var><br><var type="BME_ADDRESS">10621 Calle Lee, Building 141, Los Alamitos, CA, 90720</var></span><br><br><span style="font-family: Arial, Helvetica, sans-serif; font-weight: normal; font-size: 11px; line-height: 140%;"><var type="BME_LINKS"><span style="text-decoration:underline" href="#"><img src="https://www.benchmarkemail.com/images/verified.png" alt="Unsubscribe from all mailings" title="Unsubscribe from all mailings" border="0"></span><span style="text-decoration:underline;">Unsubscribe</span> | <span style="text-decoration:underline;">Manage Subscription</span> | <span style="text-decoration:underline;">Forward Email</span> | <span style="text-decoration:underline;">Report Abuse</span></var><br></span></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td name="bmeBadgeImage" style="text-align: left; padding-top: 20px; word-break: break-all;" align="left"><var type="BME_BADGE"><img src="https://www.benchmarkemail.com/images/web4/misc/emailfooter/opt9.png" name="bmeBadgeImage" border="0"></var></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>

<!-- <img src='http://benchmarkemail.benchurl.com/c/o?e=8E4B52&c=91CEA&t=1&l=7889F345&email=hL2iimIGZvj2QooSzVze1t7P%2FZjRPRKrj2c0%2B7DqUhU%3D&relid=' alt='' border=0 style="display:none;" height=1 width=1> -->