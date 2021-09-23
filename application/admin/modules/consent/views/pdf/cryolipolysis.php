<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<?php $finalData = json_decode($data['jsonData']);
// e($finalData);
$this->load->view('inc-messages');
?>
<style>
    .cryoli-text {
        font-size: 20px;
        line-height: normal;
        color: #2f5496;
        font-weight: 600;
        margin-bottom: 6px;
    }

    .contra-text-head {
        font-weight: 500 !important;
    }

    .cryop-client-info {
        margin-top: 26px;
    }

    .cropt-text-div {
        padding: 40px 0;
    }

    .clientall-info-div .clicnet-main:nth-child(2n+1) {
        border-right: 1px solid #000;
    }

    .croyp-client-main {
        border: 1px solid #000;
        border-bottom: none;
        margin-bottom: 22px;
    }

    .crypo-heading {
        text-align: center;
    }

    .crpyo-two-div,
    .dis-func-main-inner {
        display: flex;
    }

    .clicnet-main {
        width: 50%;
        padding: 4px 8px;
        border-bottom: 1px solid #000;
    }

    .dis-func-main {
        width: 50%;
    }

    .client-name-div {
        font-size: 17px;
        line-height: normal;
        color: #000;
        font-weight: 500;
        white-space: nowrap;
        min-width: 190px;
    }

    #client,
    #address,
    #client-if-yes,
    #inner-text {
        border: none;
        width: 100%;
        height: 110px;
        resize: none;
        border-bottom: 1px solid #000;
    }

    .clint-name {
        border: none;
        width: 100%;
        height: 32px;
        border-bottom: 1px solid #000;
        margin: 0 !important;
    }

    .contradictions-inner-main .clicnet-main:nth-child(2n+1) {
        border-right: 1px solid #000;
    }


    .clicnet-main.empty-clint-div {
        height: 45px;
    }

    .contrain-div {
        border-top: 1px solid #000;
        margin-bottom: 0px;
        display: flex;
        border-bottom: 1px solid #000;
    }

    .clicnet-main.answered-mian p {
        font-weight: 400;
        font-size: 15px;
    }

    .contradictions-inner-main,
    .choose-contradictions-div {
        width: 50%;
    }

    .contradictions-inner-main .clicnet-main,
    .choose-contradictions-div .clicnet-main {
        width: 100%;
    }

    .contrain-div-inner .crpyo-two-div .clicnet-main {
        display: flex;
        padding: 0;
    }

    input,
    textarea {
        font-size: 16px;
        line-height: normal;
        font-weight: 400;
        color: #000;
    }

    .contrain-div .clicnet-main {
        display: flex;
    }

    .contrain-div .crpyo-two-div .clicnet-main>p:first-child {
        width: 80%;
        padding: 4px 10px;
        font-size: 16px;
    }

    .contrain-div .crpyo-two-div .clicnet-main>p:nth-child(2),
    .contrain-div .crpyo-two-div .clicnet-main>p:nth-child(3) {
        width: 10%;
        border-left: 1px solid #000;
        text-align: center;
        text-transform: uppercase;
        padding: 4px 10px;
    }

    .contrain-div .clicnet-main {
        padding: 0;
    }

    .dis-func-mainer .clicnet-main p {
        font-weight: 400;
        font-size: 15px !important;
    }

    .clicnet-main.answered-mian .client-name-div {
        padding: 0px !important;
    }

    .client-name-div.if-yesy-text {
        font-weight: 600 !important;
        width: 100% !important;
        padding: 0 !important;
    }

    .crypo-heading.life-div-main {
        padding-top: 6px;
    }

    .clicnet-main.answered-mian {
        width: 100%;
        height: 152px;
        display: block;
        padding: 4px 10px;
    }

    .clicnet-main.answered-mian:nth-child(2n+1) {
        border-right: none;
    }

    .clicnet-main.answered-mian p {
        width: 100% !important;
    }

    .clicnet-main.cli-70 {
        width: 100%;
    }

    .clicnet-main.cli-70:nth-child(2n+1) {
        border-right: none;
    }

    .send-submit-div.d-flex.justify-content-center.mt-5 {
        display: none;
        justify-content: center;
        margin: 30px 0;
    }

    .send-submit-div.d-flex.justify-content-center.mt-5 .btn.btn-primary {
        padding: 5px 40px;
        font-size: 25px;
    }

    .contrain-div .crpyo-two-div .clicnet-main.cli-70>p:first-child {
        width: 90%;
    }

    .contrain-div .crpyo-two-div .clicnet-main.cli-70>p:nth-child(2),
    .contrain-div .crpyo-two-div .clicnet-main.cli-70>p:nth-child(3) {
        width: 5%;
    }

    .client-info-text {
        border: none;
        border-bottom: 1px solid #000;
    }

    .pattern-border-div .clicnet-main:nth-child(2n+1) {
        border-right: 1px solid #000;
    }

    .client-area-text {
        margin-top: 10px;
    }

    .crypoli-img-div {
        margin: auto;
        display: table;
    }

    .info-alls-main li,
    .client-ul ul li,
    .clint-phot-graphix ul li,
    .client-next-step-txt {
        font-size: 16px;
        line-height: 25px;
        margin-bottom: 12px;
        font-weight: 400;
        position: relative;
    }

    .checkes-text-div {
        width: 20px;
        height: 20px;
        position: absolute;
        right: 0;
        top: -3px;
    }

    .cli-info {
        width: 94% !important;
        display: table;
    }

    .input-sign-text {
        border: none;
        border-bottom: 1px solid #000;
        width: 79%;
    }

    .clinet-signer {
        width: 70%;
        padding-right: 10px;
    }

    .signer-clienr {
        width: 30%;
    }

    .client-signature-inner {
        display: flex;
        margin-bottom: 15px;
    }

    .cropt-text-div input {
        margin: 5px;
    }

    .values-fille {
        width: 100%;
        border: none;
        border-bottom: 1px solid #000;
    }


    .contrain-div .crpyo-two-div .clicnet-main>.sleep-cond:first-child {
        width: 50%;
    }

    .perf-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 50%;
        padding: 4px 10px;
    }

    .client-common-head {
        font-size: 20px;
        line-height: normal;
        color: #2f5496;
        margin-bottom: 18px;
    }

    .client-ul {
        margin-bottom: 30px;
    }

    .client-ul ul,
    .next-step-div ul,
    .clint-phot-graphix ul,
    .info-alls-main ul {
        padding-left: 16px;
    }

    .crypo-heading-inner {
        margin-bottom: 18px;
    }

    .client-ul ul li::before,
    .clint-phot-graphix ul li::before,
    .next-step-div ul li::before {
        content: "\f101";
        font-family: FontAwesome;
        display: inline-block;
        margin-left: -10px;
    }

    .client-ul ul,
    .next-step-div ul,
    .clint-phot-graphix ul {
        list-style-type: none;
    }

    .clicnet-main .date {
        width: 100%;
        margin: 0 !important;
    }

    .crpyo-two-div.cryli-inner .clicnet-main {
        display: flex;
    }

    .clicnet-main.if-yex-txt-div {
        display: block;
        padding: 4px 10px;
    }

    #client-if-yes {
        height: 80px;
    }

    .clicnet-main.restricts-inner .client-name-div-value,
    .clicnet-main.restricts-inner .contrn-yes-div-value {
        padding: 4px 10px;
    }

    .client-name-div-value {
        width: 80%;
        border-right: 1px solid #000;
    }

    .contrn-yes-div-value {
        width: 20%;
    }

    .clicnet-main.restricts-inner input {
        margin: 0;
    }

    .clint-under-text {
        margin: 30px 0px;
        font-size: 17px;
        font-weight: 400;
    }

    .cleint-name-inner-main p:first-child {
        margin-bottom: 10px;
        font-size: 17px;
        line-height: normal;
        color: #000;
        font-weight: 400;
    }

    .client-grapix-inner .crypo-heading {
        margin-bottom: 20px;
    }

    .cryli-home-head {
        margin-bottom: 30px;
    }

    .print-sign-div,
    .lats-print-inner {
        display: flex;
    }

    .print-sign-div {
        width: 33.33%;
    }

    .print-sign-div input {
        width: 100%;
    }

    .printlers-sign-div-first {
        display: flex;
        width: 70%;
    }

    .printlers-sign-div-second {
        display: flex;
        width: 30%;
    }

    .printlers-sign-div-first input,
    .printlers-sign-div-second input {
        width: 100%;
    }

    .client-name-div-last {
        font-size: 17px;
        min-width: 100px;
        white-space: nowrap;
    }

    .clinet-signer input,
    .signer-clienr input {
        width: 100%;
    }

    .clinet-signer,
    .signer-clienr,
    .treats-conditions-main,
    .subs-date-div {
        display: flex;
    }

    .subsequent-inner-main-div {
        display: flex;
        border-bottom: 1px solid #000;
    }

    .subs-treating-inner {
        border: 1px solid #000;
        border-bottom: none;
    }

    .subsequent-inner-main-div>div {
        width: 50%;
    }

    .clicnet-main-treats {
        padding: 4px 8px;
        border-bottom: 1px solid #000;
    }

    .subsquent-img-div:nth-child(odd) {
        border-right: 1px solid #000;
    }

    .subsquent-img-div img {
        margin: auto;
        display: table;
    }

    .clicnet-main-treats.post-subst {
        display: flex;
        border-bottom: none;
        justify-content: space-between;
    }

    .subs-treat-heading {
        font-size: 17px;
        line-height: normal;
        font-weight: 400;
        padding: 4px 10px;
    }

    .treats-conditions-main,
    .subs-date-div input {
        background: #c0cbdf;
    }

    .subsequent-inner-main {
        margin-bottom: 30px;
    }

    .client-name-div.cryo-treats p {
        white-space: normal;
        padding: 4px 10px;
        font-weight: 400;
        font-size: 15px;
    }

    .contrain-div-inner p {
        font-weight: 400;
    }

    .clint-removal-main.cryo-prob {
        width: 129px;
        display: flex;

    }

    .clint-removal-main.cryo-prob p {
        text-transform: uppercase;
    }

    .clint-removal-main.cryo-prob .contrn-yes-div,
    .clint-removal-main.cryo-prob .contrn-no-div {
        border-left: 1px solid #000;
        padding: 4px 10px;
        text-align: center;
        width: 50%;
    }

    .client-name-div.cryo-treats {
        width: calc(100% - 129px);
    }

    .inform-client-mian {
        margin-bottom: 30px;
    }

    .client-name-div-date {
        min-width: 50px;
    }

    textarea:focus,
    input:focus {
        outline: none;
    }


    @media(max-width:767px) {
        .cryoli-text {
            font-size: 17px;
        }

        .clicnet-main.answered-mian p {
            font-size: 13px;
        }

        .perf-inner {
            width: 100%;
        }

        .client-name-div.cryo-treats p {
            font-size: 13px;
        }

        .client-signature-inner {
            display: block;
            margin-bottom: 10px;
        }

        .contrain-div {
            display: block;
            border-bottom: none;
        }

        .pattern-border-div .clicnet-main:nth-child(2n+1),
        .clientall-info-div .clicnet-main:nth-child(2n+1) {
            border-right: none;
        }

        .contradictions-inner-main,
        .choose-contradictions-div {
            width: 100%;
        }

        .info-alls-main li,
        .client-ul ul li,
        .clint-phot-graphix ul li,
        .client-next-step-txt {
            font-size: 14px;
            line-height: 22px;
            margin-bottom: 6px;
        }

        .clinet-signer,
        .signer-clienr,
        .treats-conditions-main,
        .subs-date-div,
        .subsequent-inner-main-div,
        .print-sign-div,
        .lats-print-inner,
        .printlers-sign-div-first,
        .printlers-sign-div-second,
        .crpyo-two-div,
        .dis-func-main-inner {
            display: block;
        }

        .clinet-signer,
        .signer-clienr,
        .subsequent-inner-main-div>div,
        .print-sign-div,
        .printlers-sign-div-first,
        .printlers-sign-div-second,
        .clicnet-main,
        .clint-removal-main.cryo-prob .contrn-yes-div,
        .clint-removal-main.cryo-prob .contrn-no-div {
            width: 100%;
        }

        .send-submit-div.d-flex.justify-content-center.mt-5 {
            margin-top: 14px !important;
        }

        .cli-info {
            width: 88% !important;
            display: table;
        }

        .client-name-div,
        .client-name-div-last,
        .subs-treat-heading,
        .client-common-head,
        .cleint-name-inner-main p:first-child {
            font-size: 15px;
        }

        .subs-date-div {
            padding: 4px 10px;
        }

        .cropt-text-div {
            padding: 12px 0;
        }

        .clint-under-text {
            margin: 10px 0px;
            font-size: 15px;
        }

        .client-name-div {
            min-width: 150px;
            white-space: normal;
        }

        .contrain-div .crpyo-two-div .clicnet-main>p:first-child {
            font-size: 14px;
        }

        .contrain-div .crpyo-two-div .clicnet-main>p:nth-child(2),
        .contrain-div .crpyo-two-div .clicnet-main>p:nth-child(3),
        .contrain-div .crpyo-two-div .clicnet-main.cli-70>p:nth-child(2),
        .contrain-div .crpyo-two-div .clicnet-main.cli-70>p:nth-child(3),
        .clint-removal-main.cryo-prob {
            width: 110px;
        }

        .dis-func-mainer .clicnet-main p {
            font-size: 13px !important;
            white-space: normal;
        }

        .subsequent-inner-main-div {
            margin-bottom: 15px;
            border: 1px solid #000;
        }

        .subsquent-img-div:nth-child(2n+1),
        .clicnet-main:nth-child(2n+1) {
            border-right: none;
        }

        .client-common-head,
        .cryli-home-head {
            margin-bottom: 10px;
        }


        .subs-treating-inner {
            border: none;
        }

        .clicnet-main.empty-clint-div {
            display: none;
        }

        .contrn-yes-div-value {
            width: 110px;
            border-left: 1px solid #000;
        }


        #client,
        #address,
        #client-if-yes,
        #inner-text {
            height: 100px;
        }

        .client-name-div-value {
            border-right: none;
        }

        .clicnet-main.clinet-border {
            border-bottom: 1px solid #000 !important;
        }


        .client-name-div-value,
        .client-name-div.cryo-treats,
        .contrain-div .crpyo-two-div .clicnet-main>p:first-child,
        .contrain-div .crpyo-two-div .clicnet-main.cli-70>p:first-child,
        .client-name-div-value {
            width: calc(100% - 110px);
        }

        .contradictions-inner-main .clicnet-main:nth-child(2n+1) {
            border-right: none;
        }

        .contradictions-inner-main {
            border-bottom: 1px solid #000;
        }


    }


    @media(min-width:768px) and (max-width:1199px) {
        .cryoli-text {
            font-size: 18px;
        }

        .client-name-div.cryo-treats,
        .client-name-div-value {
            width: calc(100% - 82px);
        }

        .clint-removal-main.cryo-prob,
        .contrn-yes-div-value {
            width: 82px;

        }

        .contrn-yes-div-value {
            border-left: 1px solid #000;
        }

        .client-name-div-value {
            border-right: none;
        }

        .client-name-div,
        .subs-treat-heading,
        .client-common-head {
            font-size: 16px;
            white-space: normal;
        }

        .send-submit-div.d-flex.justify-content-center.mt-5 {
            margin-top: 15px !important;
        }

        .cli-info {
            width: 92% !important;
        }

        .info-alls-main li,
        .client-ul ul li,
        .clint-phot-graphix ul li,
        .client-next-step-txt {
            font-size: 15px;
            line-height: 22px;
            margin-bottom: 8px;
        }

        .subsquent-img-div {
            width: 42% !important;
        }

        .subsequent-text-div {
            width: 58% !important;
        }

        .cropt-text-div {
            padding: 12px 0;
        }

        .clinet-signer,
        .signer-clienr,
        .treats-conditions-main,
        .subs-date-div {
            display: block;
        }

        .subs-date-div {
            padding: 4px 10px;
        }





    }

    .client-name-div.sleep-cond {
        padding: 4px 10px;
        font-size: 15px;
    }

    .clicnet-main.answered-mian {
        display: block !important;
        padding: 4px 10px !important;
    }
</style>

<section class="cropt-text-div">
    <div class="container-fluid">
        <form action="consent/update/<?= $data['id'] ?>" method="post">
            <div class="crypo-heading">
                <p class="cryoli-text">Cryolipolysis Consultation Form </p>
            </div>
            <div class="croyp-client-main">
                <div class="clientall-info-div">
                    <div class="crpyo-two-div">
                        <div class="clicnet-main">
                            <p class="client-name-div">Client Name:</p>
                            <textarea name="name" id="client" required value="<?php echo set_value('name', $finalData->name); ?>"><?php echo set_value('name', $finalData->name); ?></textarea>
                        </div>
                        <div class="clicnet-main">
                            <p class="client-name-div">Address: </p>
                            <textarea name="address" id="address" required value="<?php echo set_value('address', $finalData->address); ?>"><?php echo set_value('address', $finalData->address); ?></textarea>
                        </div>
                    </div>
                    <div class="crpyo-two-div cryli-inner">
                        <div class="clicnet-main">
                            <p class="client-name-div">Date of Birth:</p>
                            <input type="text" class="date datepickernk" id="datepickernk" name="dob" value="<?php echo set_value('dob', $finalData->dob); ?>" required>
                        </div>
                        <div class="clicnet-main">
                            <p class="client-name-div">Post Code: </p>
                            <input type="text" name="postcode" class="clint-name" required value="<?php echo set_value('postcode', $finalData->postcode); ?>">
                        </div>
                    </div>
                    <div class="crpyo-two-div cryli-inner">
                        <div class="clicnet-main">
                            <p class="client-name-div">Gender: </p>
                            <div class="clint-inner-radio">
                                <input type="radio" name="gender" <?= $finalData->gender == "male" ? 'checked' : '' ?> value="male"> Male
                                <input type="radio" name="gender" <?= $finalData->gender == "female" ? 'checked' : '' ?> value="female"> Female
                            </div>
                        </div>
                        <div class="clicnet-main">
                            <p class="client-name-div">Telephone No: </p>
                            <input type="text" name="telephone" class="clint-name" value="<?php echo set_value('telephone', $finalData->telephone); ?>" required>
                        </div>
                    </div>
                    <div class="crpyo-two-div cryli-inner ">
                        <div class="clicnet-main">
                            <p class="client-name-div">Occupation:</p>
                            <input type="text" name="occupy" class="clint-name" value="<?php echo set_value('occupy', $finalData->occupy); ?>" required>
                        </div>
                        <div class="clicnet-main">
                            <p class="client-name-div">E-Mail:</p>
                            <input type="text" name="email" class="clint-name" value="<?php echo set_value('email', $finalData->email); ?>" required>
                        </div>
                    </div>
                    <div class="crpyo-two-div cryli-inner">
                        <div class="clicnet-main">
                            <p class="client-name-div">Practitioner Name: </p>
                            <input type="text" name="praction_name" class="clint-name" value="<?php echo set_value('praction_name', $finalData->praction_name); ?>" required>
                        </div>
                        <div class="clicnet-main">
                            <p class="client-name-div ">Date:</p>
                            <input type="text" class="date datepickernk" id="datepickernk" value="<?php echo set_value('clientdate', $finalData->clientdate); ?>" name="clientdate" required>
                        </div>
                    </div>

                </div>
                <div class="crypo-heading life-div-main">
                    <p class="cryoli-text">Health and Lifestyle </p>
                </div>
                <div class="contrain-div">
                    <div class="contradictions-inner-main">
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p class="contra-text-head">Contraindications</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div">
                                        <p>yes</p>
                                    </div>
                                    <div class="contrn-no-div">
                                        <p>no</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Liver/Kidney Disease</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="livkid" value="yes" <?= $finalData->livkid == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="livkid" value="no" <?= $finalData->livkid == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Heart Conditions inc. Pacemaker</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="pace" value="yes" <?= $finalData->pace == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="pace" value="no" <?= $finalData->pace == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Silicosis or other Lung Conditions</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="lung" value="yes" <?= $finalData->lung == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="lung" value="no" <?= $finalData->lung == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Cancer (Radiotherapy/Chemotherapy)</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="r_therapy" value="yes" <?= $finalData->r_therapy == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="r_therapy" value="no" <?= $finalData->r_therapy == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Reynaud’s Disease (or other vaso constrict disorders)</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="reynaud" value="yes" <?= $finalData->reynaud == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="reynaud" value="no" <?= $finalData->reynaud == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Physical Hypotonic</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="hypotonic" value="yes" <?= $finalData->hypotonic == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="hypotonic" value="no" <?= $finalData->hypotonic == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Cardiovascular Disease </p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="cardio" value="yes" <?= $finalData->cardio == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="cardio" value="no" <?= $finalData->cardio == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Cerebral Disease</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="cerebral" value="yes" <?= $finalData->cerebral == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="cerebral" value="no" <?= $finalData->cerebral == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Immune System Disease (i.e. AIDS or HIV) </p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="immuned" value="yes" <?= $finalData->immuned == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="immuned" value="no" <?= $finalData->immuned == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Urticarial or other immune disorders </p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="urticarial" value="yes" <?= $finalData->urticarial == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="urticarial" value="no" <?= $finalData->urticarial == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Hypoproteinaemia </p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="hypopro" value="yes" <?= $finalData->hypopro == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="hypopro" value="no" <?= $finalData->hypopro == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Frostbite Intolerance </p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="frost" value="yes" <?= $finalData->frost == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="frost" value="no" <?= $finalData->frost == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Hernia or weak stomach muscle walls</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="hernia" value="yes" <?= $finalData->hernia == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="hernia" value="no" <?= $finalData->hernia == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Severe diabetes</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="severe" value="yes" <?= $finalData->severe == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="severe" value="no" <?= $finalData->severe == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Recent invasive surgery (in the last 12 months)</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="invasive" value="yes" <?= $finalData->invasive == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="invasive" value="no" <?= $finalData->invasive == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Artificial Implants (bone, etc)</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="artificial" value="yes" <?= $finalData->artificial == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="artificial" value="no" <?= $finalData->artificial == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Metal Plates or Joint Implants</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="implants" value="yes" <?= $finalData->implants == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="implants" value="no" <?= $finalData->implants == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main clinet-border" style="border-bottom: none;">
                                <div class="client-name-div cryo-treats">
                                    <p>Sites of prior cosmetic surgery</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="surgery" value="yes" <?= $finalData->surgery == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="surgery" value="no" <?= $finalData->surgery == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main empty-clint-div" style="border-bottom: none;">
                                <div class="client-name-div cryo-treats">
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"></div>
                                    <div class="contrn-no-div"></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main empty-clint-div">
                                <div class="client-name-div cryo-treats">
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"></div>
                                    <div class="contrn-no-div"></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Pregnant or Breastfeeding</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="fedding" value="yes" <?= $finalData->fedding == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="fedding" value="no" <?= $finalData->fedding == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="clicnet-main" style="border-bottom: none;">
                            <div class="client-name-div cryo-treats">
                                <p>Currently under the influence of drugs or alcohol</p>
                            </div>
                            <div class="clint-removal-main cryo-prob">
                                <div class="contrn-yes-div"><input type="radio" name="influence" value="yes" <?= $finalData->influence == "yes" ? 'checked' : '' ?>></div>
                                <div class="contrn-no-div"><input type="radio" name="influence" value="no" <?= $finalData->influence == "no" ? 'checked' : '' ?>></div>
                            </div>
                        </div>
                    </div>

                    <div class="choose-contradictions-div">
                        <div class="crpyo-two-div">
                            <div class="clicnet-main any-none">
                                <div class="client-name-div cryo-treats ">
                                    <p class="contra-text-head">Do you have any of the following</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div">
                                        <p>yes</p>
                                    </div>
                                    <div class="contrn-no-div">
                                        <p>no</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Hyper or Hypotension</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="hyper" value="yes" <?= $finalData->hyper == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="hyper" value="no" <?= $finalData->hyper == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Scarring history, fibrosis or seborrhoea </p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="seborrhoea" value="yes" <?= $finalData->seborrhoea == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="seborrhoea" value="no" <?= $finalData->seborrhoea == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Haemophilia or other clotting disorders</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="haemophil" value="yes" <?= $finalData->haemophil == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="haemophil" value="no" <?= $finalData->haemophil == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Epilepsy</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="epilepsy" value="yes" <?= $finalData->epilepsy == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="epilepsy" value="no" <?= $finalData->epilepsy == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Diabetes</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="betes" value="yes" <?= $finalData->betes == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="betes" value="no" <?= $finalData->betes == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Thyroid Condition</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="thyroid" value="yes" <?= $finalData->thyroid == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="thyroid" value="no" <?= $finalData->thyroid == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Hormonal Imbalances</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="hormonal" value="yes" <?= $finalData->hormonal == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="hormonal" value="no" <?= $finalData->hormonal == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Other immune disorders not listed</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="disorders" value="yes" <?= $finalData->disorders == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="disorders" value="no" <?= $finalData->disorders == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Received or donated organ transplants </p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="donated" value="yes" <?= $finalData->donated == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="donated" value="no" <?= $finalData->donated == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Psoriasis or eczema in treatment area </p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="eczema" value="yes" <?= $finalData->eczema == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="eczema" value="no" <?= $finalData->eczema == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Keloid/hypertrophic scar in the region</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="keloid" value="yes" <?= $finalData->keloid == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="keloid" value="no" <?= $finalData->keloid == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>High Cholesterol</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="choles" value="yes" <?= $finalData->choles == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="choles" value="no" <?= $finalData->choles == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Thrombosis (past or present)</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="thrombosis" value="yes" <?= $finalData->thrombosis == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="thrombosis" value="no" <?= $finalData->thrombosis == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Broken Bones</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="broken" value="yes" <?= $finalData->broken == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="broken" value="no" <?= $finalData->broken == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Undiagnosed swelling or inflammation</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="undiagnosed" value="yes" <?= $finalData->undiagnosed == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="undiagnosed" value="no" <?= $finalData->undiagnosed == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Bruising, cuts or abrasions (treatment area) </p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="abrasions" value="yes" <?= $finalData->abrasions == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="abrasions" value="no" <?= $finalData->abrasions == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Fever</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="fever" value="yes" <?= $finalData->fever == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="fever" value="no" <?= $finalData->fever == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main" style="border-bottom: 1px solid #000;">
                                <div class="client-name-div cryo-treats">
                                    <p>Menstruation </p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="menstruation" value="yes" <?= $finalData->menstruation == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="menstruation" value="no" <?= $finalData->menstruation == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Any other conditions not listed</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="conditions" value="yes" <?= $finalData->conditions == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="conditions" value="no" <?= $finalData->conditions == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main if-yex-txt-div empty-clint-div" style="border-bottom: none;">
                                <div class="client-name-div cryo-treats if-yesy-text">
                                    <p>If yes please list:</p>
                                </div>
                                <div class="clint-removal-main">
                                    <div class="contrn-yes-div"><textarea name="removal_clint" id="client-if-yes" value="<?php echo set_value('removal_clint', $finalData->removal_clint); ?>"><?php echo set_value('removal_clint', $finalData->removal_clint); ?></textarea></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contrain-div-inner">
                    <div class="crpyo-two-div">
                        <div class="clicnet-main answered-mian">
                            <p class="client-name-div">If you have answered yes to any of the above, please give full details: </p>
                            <textarea name="answered_inner" id="inner-text" value="<?php echo set_value('answered_inner', $finalData->answered_inner); ?>"><?php echo set_value('answered_inner', $finalData->answered_inner); ?></textarea>
                        </div>
                    </div>

                    <div class="crpyo-two-div">
                        <div class="clicnet-main cli-70">
                            <div class="client-name-div cryo-treats">
                                <p>Are you currently taking any medication?</p>
                            </div>
                            <div class="clint-removal-main cryo-prob">
                                <div class="contrn-yes-div"><input type="radio" name="medication" value="yes" <?= $finalData->medication == "yes" ? 'checked' : '' ?>></div>
                                <div class="contrn-no-div"><input type="radio" name="medication" value="no" <?= $finalData->medication == "no" ? 'checked' : '' ?>></div>
                            </div>
                        </div>
                    </div>

                    <div class="crpyo-two-div">
                        <div class="clicnet-main answered-mian">
                            <p class="client-name-div">If yes, please list all medications</p>
                            <textarea name="answered_medit" id="inner-text" value="<?php echo set_value('answered_medit', $finalData->answered_medit); ?>"><?php echo set_value('answered_medit', $finalData->answered_medit); ?></textarea>
                        </div>
                    </div>

                    <div class="pattern-border-div">
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <p class="client-name-div sleep-cond ">How is your sleep pattern? </p>
                                <div class="perf-inner">
                                    <p class="contrn-yes-div"><input type="radio" name="performance" value="good" <?= $finalData->performance == "good" ? 'checked' : '' ?>>Good</p>
                                    <p class="contrn-no-div"><input type="radio" name="performance" value="average" <?= $finalData->performance == "average" ? 'checked' : '' ?>>Average</p>
                                    <p class="contrn-no-div"><input type="radio" name="performance" value="poor" <?= $finalData->performance == "poor" ? 'checked' : '' ?>>Poor</p>
                                </div>
                            </div>
                            <div class="clicnet-main restricts-inner">
                                <div class="client-name-div-value">
                                    <p>No. of Hours Sleep per night:</p>
                                </div>
                                <div class="contrn-yes-div-value"><input type="text" class="values-fille" value="<?php echo set_value('hours_slept', $finalData->hours_slept); ?>" name="hours_slept"></div>
                            </div>
                        </div>

                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <p class="client-name-div sleep-cond">How is your diet?</p>
                                <div class="perf-inner">
                                    <p class="contrn-yes-div"><input type="radio" name="diet" value="good" <?= $finalData->diet == "good" ? 'checked' : '' ?>>Good</p>
                                    <p class="contrn-no-div"><input type="radio" name="diet" value="average" <?= $finalData->diet == "average" ? 'checked' : '' ?>>Average</p>
                                    <p class="contrn-no-div"><input type="radio" name="diet" value="poor" <?= $finalData->diet == "poor" ? 'checked' : '' ?>>Poor</p>
                                </div>
                            </div>
                            <div class="clicnet-main restricts-inner">
                                <div class="client-name-div-value">
                                    <p>How much water do you drink per day?</p>
                                </div>
                                <div class="contrn-yes-div-value"><input type="text" class="values-fille" value="<?php echo set_value('drink_per', $finalData->drink_per); ?>" name="drink_per"></div>
                            </div>
                        </div>

                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Do you drink alcohol?</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="alcohol" value="yes" <?= $finalData->alcohol == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="alcohol" value="no" <?= $finalData->alcohol == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                            <div class="clicnet-main restricts-inner">
                                <div class="client-name-div-value">
                                    <p>If yes, how many units per week? </p>
                                </div>
                                <div class="contrn-yes-div-value"><input type="text" class="values-fille" value="<?php echo set_value('units_per', $finalData->units_per); ?>" name="units_per"></div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Do you smoke?</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="smoke" value="yes" <?= $finalData->smoke == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="smoke" value="no" <?= $finalData->smoke == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                            <div class="clicnet-main restricts-inner">
                                <div class="client-name-div-value">
                                    <p>If yes, how many cigarettes per day?</p>
                                </div>
                                <div class="contrn-yes-div-value"><input type="text" class="values-fille" value="<?php echo set_value('fille_input', $finalData->fille_input); ?>" name="fille_input"></div>
                            </div>
                        </div>
                        <div class="crpyo-two-div">
                            <div class="clicnet-main">
                                <div class="client-name-div cryo-treats">
                                    <p>Do you exercise?</p>
                                </div>
                                <div class="clint-removal-main cryo-prob">
                                    <div class="contrn-yes-div"><input type="radio" name="exercise" value="yes" <?= $finalData->exercise == "yes" ? 'checked' : '' ?>></div>
                                    <div class="contrn-no-div"><input type="radio" name="exercise" value="no" <?= $finalData->exercise == "no" ? 'checked' : '' ?>></div>
                                </div>
                            </div>
                            <div class="clicnet-main restricts-inner">
                                <div class="client-name-div-value">
                                    <p>How often do you exercise per week?</p>
                                </div>
                                <div class="contrn-yes-div-value"><input type="text" class="values-fille" value="<?php echo set_value('often_input', $finalData->often_input); ?>" name="often_input"></div>
                            </div>
                        </div>


                    </div>


                    <div class="crpyo-two-div">
                        <div class="clicnet-main cli-70">
                            <div class="client-name-div cryo-treats">
                                <p>Have you ever had cryo body contouring or any fat removal or similar treatments before? If yes, please give details below including the type of treatment and the area.</p>
                            </div>
                            <div class="clint-removal-main cryo-prob">
                                <div class="contrn-yes-div"><input type="radio" name="removal" value="yes" <?= $finalData->removal == "yes" ? 'checked' : '' ?>></div>
                                <div class="contrn-no-div"><input type="radio" name="removal" value="no" <?= $finalData->removal == "no" ? 'checked' : '' ?>></div>
                            </div>
                        </div>
                    </div>

                    <div class="crpyo-two-div">
                        <div class="clicnet-main cli-70">
                            <div class="client-name-div cryo-treats">
                                <p>Are you fully committed to making the relevant changes to get the best possible results from your treatment? </p>
                            </div>

                            <div class="clint-removal-main cryo-prob">
                                <div class="contrn-yes-div"><input type="radio" name="commit" value="yes" <?= $finalData->commit == "yes" ? 'checked' : '' ?>></div>
                                <div class="contrn-no-div"><input type="radio" name="commit" value="no" <?= $finalData->commit == "no" ? 'checked' : '' ?>></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="inform-client-mian">

                <div class="crypo-heading life-div-main">
                    <p class="cryoli-text">Informed client consent to Cryolipolysis treatment </p>
                </div>

                <div class="cryop-client-info">
                    <p>I <input type="text" class="client-info-text" name="clinet_informed_input" value="<?php echo set_value('clinet_informed_input', $finalData->clinet_informed_input); ?>" required>consent to, and authorise, The Qualified Practitioners of <input type="text" class="client-info-text" name="clinet_informed_carry" value="<?php echo set_value('dob', $finalData->dob); ?>" required> to carry out Cryolipolysis treatments as discussed and agreed. </p>

                    <p class="client-area-text">The areas to be treated are: </p>

                    <div class="crypoli-img-div">
                        <img src="images/cryopli.png" class="crypoli-img img-responsive">
                    </div>

                    <div class="info-alls-main">
                        <ul>
                            <li> <span class="cli-info"> The treatment has been fully explained to me. I understand that this treatment can take up to 12 weeks for maximum results to be visible. I have been advised that results vary from person to person and that results will also depend on how well I follow my aftercare advice. </span> <input type="checkbox" class="checkes-text-div" name="aftercare" value="yes" <?= $finalData->aftercare == "yes" ? 'checked' : '' ?>> </li>
                            <li> <span class="cli-info"> I understand multiple treatments will be necessary to achieve satisfactory results. I have been advised that the usual number of treatments vary from between 1 – 3 on most body areas. </span> <input type="checkbox" class="checkes-text-div" name="usual_treats" value="yes" required <?= $finalData->usual_treats == "yes" ? 'checked' : '' ?>></li>
                            <li> <span class="cli-info"> I agree to follow all the aftercare advice as provided by my therapist (namely drinking lots of water, regular body brushing, following a healthy diet and partaking in regular exercise). Whilst I understand that the results from the treatments vary considerably, I accept that all treatments are to be carried out in good faith with the best possible achievable outcome observed. </span> <input <?= $finalData->whilst_treats == "yes" ? 'checked' : '' ?> type="checkbox" class="checkes-text-div" name="whilst_treats" value="yes" required></li>
                            <li> <span class="cli-info"> I understand that there is a risk of some side effects including but not limited to, reddening, bruising, tenderness, and in more severe cases there is a risk of frostbite or ice burns. I accept these risks are possible and do not hold the therapist or company responsible for any adverse reactions that may occur from treatment. </span> <input type="checkbox" class="checkes-text-div" name="risk_accept" value="yes" <?= $finalData->risk_accept == "yes" ? 'checked' : '' ?> required></li>
                            <li> <span class="cli-info"> I have asked all relevant questions appertaining to this treatment and am satisfied with the explanation and information given to me regarding the possible side effects and outcome of Cryolipolysis. </span> <input type="checkbox" class="checkes-text-div" name="outcome_informed" value="yes" required <?= $finalData->outcome_informed == "yes" ? 'checked' : '' ?>></li>
                            <li> <span class="cli-info"> I have been given full pre and post treatment advice and understand and agree to follow these guidelines at all times during the treatment programme. </span> <input type="checkbox" class="checkes-text-div" name="programme" value="yes" required <?= $finalData->programme == "yes" ? 'checked' : '' ?>></li>
                            <li> <span class="cli-info"> In the unlikely event of an adverse reaction, I will advise the salon/clinic within 24 hours and, in the cases or frostbite or ice burns, will contact my GP to obtain medical advice. </span> <input type="checkbox" class="checkes-text-div" name="frostbite_informed" value="yes" required <?= $finalData->frostbite_informed == "yes" ? 'checked' : '' ?>></li>
                            <li> <span class="cli-info"> I confirm that I am over the age of 18 years . <input type="checkbox" class="checkes-text-div" name="age_informed" value="yes" required <?= $finalData->age_informed == "yes" ? 'checked' : '' ?>></li>
                            <li> <span class="cli-info"> I confirm that I have read and agree to all the guidelines and recommendations of this Informed Consent form. <input type="checkbox" class="checkes-text-div" name="guidelines_informed" value="yes" required <?= $finalData->guidelines_informed == "yes" ? 'checked' : '' ?>></li>
                            <ul>
                    </div>

                    <div class="signature-mian-ul">
                        <div class="client-signature-inner">
                            <div class="clinet-signer">
                                <p class="client-name-div">Client Signature: </p>
                                <input type="text" class="input-sign-text" name="clint_informed" value="<?php echo set_value('clint_informed', $finalData->clint_informed); ?>" required>
                            </div>
                            <div class="signer-clienr">
                                <p class="client-name-div-date">Date: </p>
                                <input type="text" class="date datepickernk" id="datepickernk" name="signaturedate" value="<?php echo set_value('signaturedate', $finalData->signaturedate); ?>" required>
                            </div>
                        </div>
                        <div class="client-signature-inner">
                            <div class="clinet-signer">
                                <p class="client-name-div">Practitioner Signature: </p>
                                <input type="text" class="input-sign-text" value="<?php echo set_value('practioner_informed', $finalData->practioner_informed); ?>" name="practioner_informed" required>
                            </div>
                            <div class="signer-clienr">
                                <p class="client-name-div-date">Date: </p>
                                <input type="text" class="date datepickernk" value="<?php echo set_value('practionerdate', $finalData->practionerdate); ?>" id="datepickernk" name="practionerdate" required>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="subsequent-inner-main">
                <div class="crypo-heading-inner">
                    <p class="cryoli-text">Subsequent treatments </p>
                </div>


                <div class="subs-treating-inner">
                    <div class="subsequent-inner-main-div">
                        <div class="subsquent-img-div">
                            <img src="images/cryopli.png" class="img-fluid">
                        </div>

                        <div class="subsequent-text-div">
                            <div class="subs-condit-div">
                                <div class="subs-treat-div-main">
                                    <div class="treats-conditions-main">
                                        <div class="treats-subs-main">
                                            <p class="subs-treat-heading">Treatment Session 1 </p>
                                        </div>
                                        <div class="subs-date-div">
                                            <p class="client-name-div-date">Date: </p>
                                            <input type="text" class="date datepickernk" id="datepickernk" name="subsdate_1" value="<?php echo set_value('subsdate_1', $finalData->subsdate_1); ?>" required>
                                        </div>
                                    </div>
                                    <div class="clicnet-main-treats">
                                        <p class="client-name-div">Applicators Used</p>
                                        <textarea name="treatname1" id="client" value="<?php echo set_value('treatname1', $finalData->treatname1); ?>" required=""><?php echo set_value('treatname1', $finalData->treatname1); ?></textarea>
                                    </div>
                                    <div class="clicnet-main-treats">
                                        <p class="client-name-div">Treatment comments/observations</p>
                                        <textarea name="comment_1" id="client" value="<?php echo set_value('comment_1', $finalData->comment_1); ?>" required=""><?php echo set_value('comment_1', $finalData->comment_1); ?></textarea>
                                    </div>
                                    <div class="clicnet-main-treats post-subst">
                                        <p class="client-name-div">Post treatment photos taken </p>
                                        <div class="clint-inner-radio">
                                            <input type="radio" name="post_yes" value="male" <?= $finalData->post_yes == "male" ? 'checked' : '' ?>> yes
                                            <input type="radio" name="post_yes" value="female" <?= $finalData->post_yes == "female" ? 'checked' : '' ?>> no
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="subsequent-inner-main-div">
                        <div class="subsquent-img-div">
                            <img src="images/cryopli.png" class="img-fluid">
                        </div>

                        <div class="subsequent-text-div">
                            <div class="subs-condit-div">
                                <div class="subs-treat-div-main">
                                    <div class="treats-conditions-main">
                                        <div class="treats-subs-main">
                                            <p class="subs-treat-heading">Treatment Session 2 </p>
                                        </div>
                                        <div class="subs-date-div">
                                            <p class="client-name-div-date">Date: </p>
                                            <input type="text" class="date datepickernk" value="<?php echo set_value('subsdate_2', $finalData->subsdate_2); ?>" id="datepickernk" name="subsdate_2">
                                        </div>
                                    </div>
                                    <div class="clicnet-main-treats">
                                        <p class="client-name-div">Applicators Used</p>
                                        <textarea name="treatname2" value="<?php echo set_value('treatname2', $finalData->treatname2); ?>" id="client"><?php echo set_value('treatname2', $finalData->treatname2); ?></textarea>
                                    </div>
                                    <div class="clicnet-main-treats">
                                        <p class="client-name-div">Treatment comments/observations</p>
                                        <textarea name="comment_2" value="<?php echo set_value('comment_2', $finalData->comment_2); ?>" id="client"><?php echo set_value('comment_2', $finalData->comment_2); ?></textarea>
                                    </div>
                                    <div class="clicnet-main-treats post-subst">
                                        <p class="client-name-div">Post treatment photos taken </p>
                                        <div class="clint-inner-radio">
                                            <input type="radio" name="post1_no" value="male" <?= $finalData->post1_no == "male" ? 'checked' : '' ?>> yes
                                            <input type="radio" name="post1_no" value="female" <?= $finalData->post1_no == "female" ? 'checked' : '' ?>> no
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="subsequent-inner-main-div">
                        <div class="subsquent-img-div">
                            <img src="images/cryopli.png" class="img-fluid">
                        </div>

                        <div class="subsequent-text-div">
                            <div class="subs-condit-div">
                                <div class="subs-treat-div-main">
                                    <div class="treats-conditions-main">
                                        <div class="treats-subs-main">
                                            <p class="subs-treat-heading">Treatment Session 3 </p>
                                        </div>
                                        <div class="subs-date-div">
                                            <p class="client-name-div-date">Date: </p>
                                            <input type="text" class="date datepickernk" value="<?php echo set_value('subsdate_3', $finalData->subsdate_3); ?>" id="datepickernk" name="subsdate_3">
                                        </div>
                                    </div>
                                    <div class="clicnet-main-treats">
                                        <p class="client-name-div">Applicators Used</p>
                                        <textarea name="treatname3" value="<?php echo set_value('treatname3', $finalData->treatname3); ?>" id="client"><?php echo set_value('treatname3', $finalData->treatname3); ?></textarea>
                                    </div>
                                    <div class="clicnet-main-treats">
                                        <p class="client-name-div">Treatment comments/observations</p>
                                        <textarea name="comment_3" value="<?php echo set_value('comment_3', $finalData->comment_3); ?>" id="client"><?php echo set_value('comment_3', $finalData->comment_3); ?></textarea>
                                    </div>
                                    <div class="clicnet-main-treats post-subst">
                                        <p class="client-name-div">Post treatment photos taken </p>
                                        <div class="clint-inner-radio">
                                            <input type="radio" name="post2_yes" value="male" <?= $finalData->post2_yes == "male" ? 'checked' : '' ?>> yes
                                            <input type="radio" name="post2_yes" value="female" <?= $finalData->post2_yes == "female" ? 'checked' : '' ?>> no
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="subsequent-inner-main-div">
                        <div class="subsquent-img-div">
                            <img src="images/cryopli.png" class="img-fluid">
                        </div>

                        <div class="subsequent-text-div">
                            <div class="subs-condit-div">
                                <div class="subs-treat-div-main">
                                    <div class="treats-conditions-main">
                                        <div class="treats-subs-main">
                                            <p class="subs-treat-heading">Treatment Session 4 </p>
                                        </div>
                                        <div class="subs-date-div">
                                            <p class="client-name-div-date">Date: </p>
                                            <input type="text" class="date datepickernk" value="<?php echo set_value('subsdate_4', $finalData->subsdate_4); ?>" id="datepickernk" name="subsdate_4">
                                        </div>
                                    </div>
                                    <div class="clicnet-main-treats">
                                        <p class="client-name-div">Applicators Used</p>
                                        <textarea name="treatname4" value="<?php echo set_value('treatname4', $finalData->treatname4); ?>" id="client"><?php echo set_value('treatname4', $finalData->treatname4); ?></textarea>
                                    </div>
                                    <div class="clicnet-main-treats">
                                        <p class="client-name-div">Treatment comments/observations</p>
                                        <textarea name="comment_4" value="<?php echo set_value('comment_4', $finalData->comment_4); ?>" id="client"><?php echo set_value('comment_4', $finalData->comment_4); ?></textarea>
                                    </div>
                                    <div class="clicnet-main-treats post-subst">
                                        <p class="client-name-div">Post treatment photos taken </p>
                                        <div class="clint-inner-radio">
                                            <input type="radio" name="post3_no" value="male" <?= $finalData->post3_no == "male" ? 'checked' : '' ?>> yes
                                            <input type="radio" name="post3_no" value="female" <?= $finalData->post3_no == "female" ? 'checked' : '' ?>> no
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="cryli-home-head">
                <div class="crypo-heading-inner">
                    <p class="cryoli-text">Client TAKE-HOME GUIDELINES</p>
                </div>

                <div class="cleint-subsequent-mian">
                    <p class="client-common-head">What to expect after the Cryolipolysis procedure: </p>
                    <div class="client-ul">
                        <ul>
                            <li>
                                Typically, there is minimal discomfort and recovery time after the procedure. Most
                                clients are able to return to their daily routine immediately after the procedure.
                            </li>
                            <li>
                                The treated area may be red for up to a few hours after the applicator is removed.
                            </li>
                            <li>
                                Many Clients have minimal discomfort following the procedure, however you may experience
                                one or more of the following sensations: deep itching, tingling, numbness, tenderness to
                                the touch, pain in the treated area, strong cramping, nausea, bloating, diarrhoea,
                                muscle spasms, aching and/or soreness. Consult your doctor if these conditions persist
                                beyond two weeks or worsen over time.
                            </li>
                            <li>
                                Following the procedure, a gradual reduction in the thickness of the fat layer will take
                                place. You may start to see changes as early as three weeks after the Cryolipolysis
                                procedure and you will experience the most dramatic results after one to three months.
                                Your body will continue naturally to process the injured fat cells from your body for
                                approximately four months after your procedure.
                            </li>
                        </ul>
                    </div>

                    <div class="next-step-div">
                        <p class="client-common-head">Next steps:</p>
                        <ul>
                            <li class="client-next-step-txt">Weight gain will prevent you from appreciating your full
                                results. Maintaining a healthy diet and exercise routine after your procedure can help
                                prevent this.</li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="client-grapix-inner">
                <div class="crypo-heading">
                    <p class="cryoli-text">CLIENT PHOTOGRAPHY CONSENT FORM </p>
                </div>

                <div class="client-grapix-main">
                    <div class="cleint-name-inner-main">
                        <p>Clients Name</p>
                        <p>I <input type="text" class="client-info-text" name="authorise_clint" value="<?php echo set_value('authorise_clint', $finalData->authorise_clint); ?>" required> authorise [insert practice name], to take photographs of my body ( Not Head ) for medical purposes to be used for my care, marketing, literature and/or case presentations. </p>
                    </div>

                    <div class="clint-phot-graphix">
                        <p class="clint-under-text">I understand that:</p>
                        <ul>
                            <li>Photographs are taken to capture treatment outcomes for the Cryolipolysis procedure. </li>
                            <li>They may be used for print, visual or electronic media including but not limited to, scientific presentations, websites and for purposes of informing the medical profession or general public about the procedure. These uses may also include marketing on behalf of [insert practice name]. </li>
                            <li>I will not be identified by name in any of the published materials. </li>
                            <li>My face will not be shown in the photographs nor will they reveal my identity. </li>
                            <li>I have the right to revoke this authorisation in writing at any time through a written revocation to [insert practice name]. </li>
                        </ul>
                        <p class="clint-under-text">I certify that I have read this release carefully and fully understand its terms. If I have any questions I can contact [insert practice name] at [insert practice number]. </p>
                    </div>

                    <div class="print-clint-div">
                        <div class="lats-print-inner">
                            <div class="print-sign-div">
                                <p class="client-name-div-last">Print Name:</p>
                                <input type="text" class="client-info-text" name="print_clint_sign" value="<?php echo set_value('print_clint_sign', $finalData->print_clint_sign); ?>" required>
                            </div>
                            <div class="print-sign-div">
                                <p class="client-name-div-last">Signature:</p>
                                <input type="text" class="client-info-text" name="signature_print" value="<?php echo set_value('signature_print', $finalData->signature_print); ?>" required>
                            </div>
                            <div class="print-sign-div">
                                <p class="client-name-div-date">Date:</p>
                                <input type="text" class="date datepickernk" id="datepickernk" value="<?php echo set_value('printdate_1', $finalData->printdate_1); ?>" name="printdate_1" required>
                            </div>

                        </div>
                        <div class="lats-print-inner">
                            <div class="printlers-sign-div-first">
                                <p class="client-name-div-last">Witness:</p>
                                <input type="text" class="client-info-text" value="<?php echo set_value('witness_sign', $finalData->witness_sign); ?>" name="witness_sign" required>
                            </div>
                            <div class="printlers-sign-div-second">
                                <p class="client-name-div-date">Date:</p>
                                <input type="text" class="date datepickernk" value="<?php echo set_value('printdate_2', $finalData->printdate_2); ?>" id="datepickernk" name="printdate_2" required>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="send-submit-div d-flex justify-content-center mt-5">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</section>
<script>
    $(document).ready(function() {
        $('.datepickernk').datepicker({
            format: 'dd/mm/yyyy'
        });
    });
</script>