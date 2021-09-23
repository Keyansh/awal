<style>
    p {
        margin: 0 0 10px;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/consent.css">
<?php $finalData = json_decode($data['jsonData']);
// e($finalData);
$this->load->view('inc-messages');
?>
<section class="client-information-and-consent">
    <div class="container-fluid">

        <div class="word-header">
            <p>
                Client Information and Consent for Radiofrequency Treatment
            </p>

        </div>
        <div class="word-body">
            This consent form includes a general description of Radiofrequency treatments including possible benefits and risks that
            may occur as a result of these treatments. The Aesthetic Practitioner responsible for your treatment will advise
            you on which of these treatments is right for you and describe and discuss the specific details of your procedure
            with you and answer your questions. Please read this consent form carefully – it may contain words that are unfamiliar
            to you. Please ask your Practitioner to explain any words or information that you do not clearly understand.
            You may take home an unsigned copy of this consent form to think about or discuss with family or friends before
            making your decision.

        </div>
        <div>
            <br>
            <p class="font-bold">
                PROCEDURES
            </p>
            <ul class="treatment-list">
                <li>
                    <p class="font-bold">
                        Radiofrequency – Stubborn Fat/Cellulite and Skin Tightening Treatments
                    </p>
                    <p>
                        It is possible that there may be areas of skin where the fat cells do not metabolise easily or there may be areas of Cellulite.
                        Radiofrequency energy can improve breakdown of fat cells and also reduce the appearance of Cellulite.
                    </p>
                    <p>
                        Radiofrequency treatments can also shrink collagen fibres in the skin bringing about tightening of the skin and a reduction
                        in skin wrinkles and folds.

                    </p>
                    <p>
                        A series of treatments may be needed to bring about these improvements.

                    </p>
                    <p>
                        Radiofrequency is electrical current pulsed at the frequency of radio-waves. This causes water molecules in your skin to
                        vibrate and creates a deep heating effect. The heat produced will be kept within tolerable limits
                        by a combination of the intensity settings used on the machine and the continual movement of the
                        handset on your skin by your Aesthetic Practitioner.

                    </p>
                    <p>
                        Your Practitioner will be communicating with you throughout your treatment and if the heat becomes too intense you should
                        tell the operator immediately who will move the handset to an unheated area of skin and/or adjust
                        the settings. Your skin in the treatment area will become quite hot but this should be tolerable.
                    </p>
                    <p>
                        Some medical conditions or use of certain medication may prevent you from safely undergoing this treatment and so your medical
                        history and medication will be discussed before you are accepted as a suitable candidate for the
                        treatment.

                    </p>
                    <p>
                        As this treatment uses a special form of electricity – all metal items such as watches, jewellery, piercings etc must be
                        removed before treatment.
                    </p>
                    <p>
                        Following the treatment some redness may appear at the site of treatment but this will disappear within an hour or so.
                    </p>

                </li>
                <li>
                    <p class="font-bold">
                        Optional Vacuum Aided Lymphatic Drainage
                    </p>
                    <p>
                        If your treatment is mainly for stubborn fat/cellulite, then following the Radiofrequency treatment outlined above, a Vacuum
                        cup may be applied to the treatment area. This will be moved slowly in the direction of the nearest
                        major Lymph nodes. This optional treatment will further mechanically disrupt fat cells and aid the
                        movement of the fat liquefied by the Radiofrequency treatment into your body’s Lymphatic system.
                        The released fatty acids and triglycerides will be transported to the liver where they will be metabolized.
                    </p>
                    <p>
                        Transport and metabolism of the fat is greatly improved if you drink plenty of water following the treatment and regularly
                        exercise. This will reduce the possibility of the fat re-depositing.
                    </p>
                </li>

            </ul>
        </div>
        <div class="client-consent">
            <form action="consent/update/<?= $data['id'] ?>" method="post">
                <p class="font-bold">
                    CLIENT CONSENT FOR TREATMENT
                </p>
                <p>
                    My signature below constitutes my acknowledgment that I,
                    <input type="text" class="my-signature-type" name="name" value="<?php echo set_value('name', $finalData->name); ?>" required>(Print Name) am a competent, consenting adult of at least 18 years of age (or my parent or legal guardian
                    is giving consent on my behalf), and further, that I:
                </p>
                <ul class="understand-info">
                    <li>
                        <p>Have read and understand the information provided in this form;</p>
                    </li>
                    <li>
                        <p>Have had my procedure adequately explained to me by my practitioner;</p>
                    </li>
                    <li>
                        <p>Have had the opportunity to ask questions, and all of my questions have been answered to my satisfaction;</p>
                    </li>
                    <li>
                        <p>Understand all post treatment recommendations and agree to adhere to them;</p>
                    </li>
                    <li>
                        <p>
                            Freely assume any risks of complications or injury from known or unknown causes associated with, relating to, or otherwise
                            arising out of this procedure;
                        </p>
                    </li>
                    <li>
                        <p>
                            Have the right to consent to or refuse any proposed procedure at any time prior to its performance;
                        </p>
                    </li>
                    <li>
                        <p>
                            Consent to, and authorise
                            <span class="radio-treatment">
                                <input type="text" class="my-signature-type" name="authorise" value="<?php echo set_value('authorise', $finalData->authorise); ?>" required>
                                <small>(Please print name of Aesthetic Practitioner performing treatment)</small>
                            </span>
                            to perform the Radiofrequency treatment

                        </p>

                    </li>
                </ul>
                <div class="parent-signature">
                    <ul class="indicate-relation list-inline">
                        <li class="col-sm-10">
                            <input type="text" class="under-eighteen" name="clientsignature" value="<?php echo set_value('clientsignature', $finalData->clientsignature); ?>" required>
                            <p class="client-signature">Client Signature (or if under 18, signature of parent/guardian)</p>
                        </li>
                        <li class="col-sm-2">
                            <input type="text" class="date datepickernk" name="date" value="<?php echo set_value('date', $finalData->date); ?>" required>
                            <p class="client-signature">Date</p>
                        </li>
                    </ul>

                </div>
                <div>
                    <ul class="zero-padding">
                        <li>
                            <p>Printed name of signatory:<input type="text" class="signatory" name="signatory" value="<?php echo set_value('signatory', $finalData->signatory); ?>" required></p>
                        </li>
                        <li>
                            <p>If signed by other than the client, indicate relationship:<input type="text" class="signatory" name="relationship" value="<?php echo set_value('relationship', $finalData->relationship); ?>" required></p>
                        </li>
                    </ul>
                </div>
                <div class="send-submit-div d-flex justify-content-center mt-5">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
    </div>

</section>
<script>
    $(document).ready(function() {
        $('.datepickernk').datepicker({
            format: 'dd/mm/yyyy'
        });
    });
</script>