<style>
    .laser-procedure .print-name {
        border: none;
        border-bottom: 1px solid;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/consent.css">
<?php $finalData = json_decode($data['jsonData']);
// e($finalData);
$this->load->view('inc-messages');
?>
<section class="laser-tattoo-removl-section">
    <div class="container-fluid">
        <form action="consent/update/<?= $data['id'] ?>" method="post">
            <div class="word-header">
                <p class="remove-tatto">Client Information and Consent for Laser Tattoo Removal</p>
            </div>
            <div class="laser-procedure">
                <p class="bold-heading-description">DESCRIPTION OF LASER TATTOO REMOVAL PROCEDURE</p>
                <ul class="special-lasere">
                    <li class="short-pulse">
                        <p>A special laser with a very short pulse is used to fragment the ink of your tattoo. Your immune system
                            then removes the tiny fragments.
                        </p>
                        <p>
                            The laser beam creates a photo-acoustic shock wave which when absorbed by tattoo pigments causes them to fragment. Heat is
                            released by the ink during this fragmentation which affects the cells surrounding the tattoo causing
                            them to become white – a small white blister also forms at the surface of the skin with each laser
                            impact. The fragmented ink particles are removed from the body by the immune system.
                        </p>
                        <p>Each impact on the skin from the laser will cause a feeling which many people describe as an elastic
                            band being ‘snapped’ against the skin. Others describe it being similar to the hot fat that sometimes
                            ‘spits’ onto the skin when frying sausages.</p>
                        <p>Occasionally tiny bleeding points may be noticed at the surface of the skin – these usually coagulate
                            and stop bleeding before the treatment is over. If you have been drinking a lot of alcohol in the
                            24 hours prior to the treatment this bleeding may be prolonged due to dilation of your blood vessels.
                            It is best if you abstain or moderate alcohol intake before any treatment as the procedure may not
                            be possible if there is too much bleeding.</p>
                        <p>
                            There is a risk that scarring of the skin in the treated area may occur but precautions will be taken to minimize this risk.
                            The laser energy will be adjusted if any adverse reaction appears or in severe cases the treatment
                            will be abandoned.
                        </p>
                        <p>
                            The white blisters that form on the skin become translucent after approx. 20 minutes. It is essential that this blistered
                            skin is looked after as described in the after-care recommendations that will be provided to you
                            - otherwise scarring may occur. It is a condition of this consent form that you agree to adhere to
                            this post-treatment advice.
                        </p>
                        <p>
                            With some tattoo inks there is a risk that the usual blistering may be more severe than usual and the energy level will be
                            reduced if this happens. Certain inks used by tattooists may form a black or brown metallic lump
                            in the skin that cannot be removed – the test patches that will be carried out will show if this
                            is likely to happen and will determine whether treatment can proceed.
                        </p>
                        <p>
                            It is usual to see some fading of the tattoo pigment a few weeks after the treatment. However many treatment sessions may
                            be needed to remove a tattoo completely. It is necessary to wait 6 – 8 weeks between each treatment
                            to allow the skin to heal before the laser sessions continue. It is not possible to accurately forecast
                            how many treatment sessions will be needed as everyone’s immune system varies. In some cases the
                            last fragments of a tattoo may prove resistant to the laser and the tattoo may not be able to be
                            completely removed.
                        </p>
                        <p>
                            You should be aware that any hair growing over the tattoo must be shaved before treatment and that the laser may stunt hair
                            regrowth for prolonged periods.
                        </p>
                        <p>The colour of the tattoo ink will influence whether laser treatment is possible on your tattoo. It is
                            also important to realise that if the tattoo being removed overlies other tattoos it may not be possible
                            to remove the tattoos underneath if they are pigments that will not absorb the laser energy. Any
                            tattoo that is covering an older tattoo should be discussed with your Laser Practitioner before treatment
                            begins.
                        </p>
                        <p>
                            Your skin type, medical history and medication will be checked during your Consultation to make sure you are suitable for
                            treatment. Test patches will also be carried out during your initial visit to ensure no adverse skin
                            reaction will occur. Your first full treatment cannot be carried out until these test patches have
                            been reviewed by your Practitioner after 14 days. Photographs of your treatment will be made to document
                            progress. It is a condition of consent that you allow these test patches and photographs to be carried
                            out.
                        </p>
                    </li>
                </ul>
                <div class="eyes-injury">
                    <p class="bold-heading-description">EYE INJURY</p>
                    <ul class="special-lasere">
                        <li class="short-pulse">
                            <p>Eye injury due to use of lasers is a risk to the client and to the practitioner. However, the risks
                                are almost completely eliminated with the use of proper eyewear. Your eyes will be covered during
                                any laser procedure either with special safety spectacles or with goggles similar to those worn
                                in a tanning booth. The practitioner and any other person in the treatment room will be wearing
                                special eyewear that filters out the potential harmful light and allows them to clearly visualize
                                the treatment area.</p>
                        </li>
                    </ul>
                </div>
                <div class="eyes-injury">
                    <p class="bold-heading-description">CLIENT CONSENT FOR TREATMENT</p>
                    <div class="knowledge">
                        <p>My signature below constitutes my acknowledgment that I,
                            <input type="text" name="name" value="<?php echo set_value('name', $finalData->name); ?>" class="print-name" required>am a competent, consenting adult of at least 18 years of age and further, that I: <input type="text" name="name_i" value="<?php echo set_value('name_i', $finalData->name_i); ?>" class="print-name" required>
                        </p>
                    </div>
                    <div class="tatto-info">
                        <ul class="read-policy list-unstyled">
                            <li class="policy-list">
                                <input type="checkbox" name="understood_information" <?= isset($finalData->understood_information) ? 'checked' : ''; ?> /> Have read and understood the information provided in this form;
                            </li>
                            <li class="policy-list">
                                <input type="checkbox" name="procedure_explained" <?= isset($finalData->procedure_explained) ? 'checked' : ''; ?> /> Have had my procedure adequately explained to me by my practitioner;
                            </li>
                            <li class="policy-list">
                                <input type="checkbox" name="opportunity_questions" <?= isset($finalData->opportunity_questions) ? 'checked' : ''; ?> /> Have had the opportunity to ask questions, and all of my questions have been answered to my satisfaction;
                            </li>
                            <li class="policy-list">
                                <input type="checkbox" name="received_information" <?= isset($finalData->received_information) ? 'checked' : ''; ?> /> Have received all of the information I require concerning my procedure;
                            </li>
                            <li class="policy-list">
                                <input type="checkbox" name="treatment_recommendations" <?= isset($finalData->treatment_recommendations) ? 'checked' : ''; ?> />Understand all post treatment recommendations and agree to adhere to them
                            </li>
                            <li class="policy-list">
                                <input type="checkbox" name="test_patches" <?= isset($finalData->test_patches) ? 'checked' : ''; ?> />Agree that test patches are performed with my signed copies of skin typing, medical history and medication declarations which
                                will be stored securely in accordance with the UK Data Protection Act
                            </li>
                            <li class="policy-list">
                                <input type="checkbox" name="risks_complications" <?= isset($finalData->risks_complications) ? 'checked' : ''; ?> />Freely assume any risks of complications or injury from known or unknown causes associated with, relating to, or otherwise
                                arising out of this procedure;
                            </li>
                            <li class="policy-list">
                                <input type="checkbox" name="right_consent" <?= isset($finalData->right_consent) ? 'checked' : ''; ?> />Have the right to consent to or refuse any proposed procedure at any time prior to its performance;
                            </li>
                        </ul>
                        <div class="tatto-remove">
                            <p> I consent to, and authorise
                                <span class="laser-practitioner">
                                    <input type="text" name="pname" value="<?php echo set_value('pname', $finalData->pname); ?>" class="performe-laser" required>
                                    <small>(Laser Practitioner Name) </small>
                                </span>
                                to perform Laser Tattoo Removal as follows:
                            </p>
                        </div>
                    </div>
                </div>
                <div class="patch-test">
                    <div class="patch-test-indicate">
                        <p class="font-bold">
                            Consent for Patch Tests
                        </p>
                    </div>
                    <div class="parent-signature">
                        <ul class="indicate-relation list-inline">
                            <li class="col-sm-10">
                                <input type="text" name="patch_name" value="<?php echo set_value('patch_name', $finalData->patch_name); ?>" class="under-eighteen" required>
                                <p class="client-signature">Client Signature</p>
                            </li>
                            <li class="col-sm-2">
                                <input type="text" name="patch_date" value="<?php echo set_value('patch_date', $finalData->patch_date); ?>" class=" date" data-provide="datepicker" placeholder="" required>
                                <p class="client-signature">Date</p>
                            </li>

                        </ul>
                        <ul class="name-of-signatry">
                            <li>
                                <p>
                                    Printed name of signatory:
                                    <input type="text" name="patch_signature" value="<?php echo set_value('patch_signature', $finalData->patch_signature); ?>" class="date" required>
                                </p>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="patch-test">
                    <div class="patch-test-indicate">
                        <p class="font-bold">
                            Consent for First Treatment
                        </p>
                        <p>
                            I certify that I have not been tanning and that no changes to my medical history or medication have taken place since my
                            previous treatment
                        </p>
                    </div>
                    <div class="parent-signature">
                        <ul class="indicate-relation list-inline">
                            <li class="col-sm-10">
                                <input type="text" name="first_name" value="<?php echo set_value('first_name', $finalData->first_name); ?>" class="under-eighteen">
                                <p class="client-signature">Client Signature</p>
                            </li>
                            <li class="col-sm-2">
                                <input type="text" name="first_date" value="<?php echo set_value('first_date', $finalData->first_date); ?>" class=" date" data-provide="datepicker" placeholder="">
                                <p class="client-signature">Date</p>
                            </li>

                        </ul>
                        <ul class="name-of-signatry">
                            <li>
                                <p>
                                    Printed name of signatory:
                                    <input type="text" name="first_signature" value="<?php echo set_value('first_signature', $finalData->first_signature); ?>" class="date">
                                </p>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="patch-test">
                    <div class="patch-test-indicate">
                        <p class="font-bold">
                            Consent for Repeat Treatment
                        </p>
                        <p>
                            I certify that I have not been tanning and that no changes to my medical history or medication have taken place since my
                            previous treatment
                        </p>
                    </div>
                    <div class="parent-signature">
                        <ul class="indicate-relation list-inline">
                            <li class="col-sm-10">
                                <input type="text" name="pgname1" value="<?php echo set_value('pgname1', $finalData->pgname1); ?>" class="under-eighteen">
                                <p class="client-signature">Client Signature</p>
                            </li>
                            <li class="col-sm-2">
                                <input type="text" name="date1" value="<?php echo set_value('date1', $finalData->date1); ?>" class=" date" data-provide="datepicker" placeholder="">
                                <p class="client-signature">Date</p>
                            </li>

                        </ul>
                        <ul class="name-of-signatry">
                            <li>
                                <p>
                                    Printed name of signatory:
                                    <input type="text" name="signature1" value="<?php echo set_value('signature1', $finalData->signature1); ?>" class="date">
                                </p>
                            </li>
                        </ul>
                    </div>



                </div>
                <div class="patch-test">
                    <div class="patch-test-indicate">
                        <p class="font-bold">
                            Consent for Repeat Treatment
                        </p>
                        <p>
                            I certify that I have not been tanning and that no changes to my medical history or medication have taken place since my
                            previous treatment
                        </p>
                    </div>
                    <div class="parent-signature">
                        <ul class="indicate-relation list-inline">
                            <li class="col-sm-10">
                                <input type="text" name="pgname2" value="<?php echo set_value('pgname2', $finalData->pgname2); ?>" class="under-eighteen">
                                <p class="client-signature">Client Signature</p>
                            </li>
                            <li class="col-sm-2">
                                <input type="text" name="date2" value="<?php echo set_value('date2', $finalData->date2); ?>" class=" date" data-provide="datepicker" placeholder="">
                                <p class="client-signature">Date</p>
                            </li>
                        </ul>
                        <ul class="name-of-signatry">
                            <li>
                                <p>
                                    Printed name of signatory:
                                    <input type="text" name="signature2" value="<?php echo set_value('signature2', $finalData->signature2); ?>" class="date">
                                </p>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="patch-test">
                    <div class="patch-test-indicate">
                        <p class="font-bold">
                            Consent for Repeat Treatment
                        </p>
                        <p>
                            I certify that I have not been tanning and that no changes to my medical history or medication have taken place since my
                            previous treatment
                        </p>
                    </div>
                    <div class="parent-signature">
                        <ul class="indicate-relation list-inline">
                            <li class="col-sm-10">
                                <input type="text" name="pgname3" value="<?php echo set_value('pgname3', $finalData->pgname3); ?>" class="under-eighteen">
                                <p class="client-signature">Client Signature</p>
                            </li>
                            <li class="col-sm-2">
                                <input type="text" name="date3" value="<?php echo set_value('date3', $finalData->date3); ?>" class=" date" data-provide="datepicker" placeholder="">
                                <p class="client-signature">Date</p>
                            </li>
                        </ul>
                        <ul class="name-of-signatry">
                            <li>
                                <p>
                                    Printed name of signatory:
                                    <input type="text" name="signature3" value="<?php echo set_value('signature3', $finalData->signature3); ?>" class="date">
                                </p>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="patch-test">
                    <div class="patch-test-indicate">
                        <p class="font-bold">
                            Consent for Repeat Treatment
                        </p>
                        <p>
                            I certify that I have not been tanning and that no changes to my medical history or medication have taken place since my
                            previous treatment
                        </p>
                    </div>
                    <div class="parent-signature">
                        <ul class="indicate-relation list-inline">
                            <li class="col-sm-10">
                                <input type="text" name="pgname4" value="<?php echo set_value('pgname4', $finalData->pgname4); ?>" class="under-eighteen">
                                <p class="client-signature">Client Signature</p>
                            </li>
                            <li class="col-sm-2">
                                <input type="text" name="date4" value="<?php echo set_value('date4', $finalData->date4); ?>" class=" date" data-provide="datepicker" placeholder="">
                                <p class="client-signature">Date</p>
                            </li>
                        </ul>
                        <ul class="name-of-signatry">
                            <li>
                                <p>
                                    Printed name of signatory:
                                    <input type="text" name="signature4" value="<?php echo set_value('signature4', $finalData->signature4); ?>" class="date">
                                </p>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="patch-test">
                    <div class="patch-test-indicate">
                        <p class="font-bold">
                            Consent for Repeat Treatment
                        </p>
                        <p>
                            I certify that I have not been tanning and that no changes to my medical history or medication have taken place since my
                            previous treatment
                        </p>
                    </div>
                    <div class="parent-signature">
                        <ul class="indicate-relation list-inline">
                            <li class="col-sm-10">
                                <input type="text" name="pgname5" value="<?php echo set_value('pgname5', $finalData->pgname5); ?>" class="under-eighteen">
                                <p class="client-signature">Client Signature</p>
                            </li>
                            <li class="col-sm-2">
                                <input type="text" name="date5" value="<?php echo set_value('date5', $finalData->date5); ?>" class=" date" data-provide="datepicker" placeholder="">
                                <p class="client-signature">Date</p>
                            </li>
                        </ul>
                        <ul class="name-of-signatry">
                            <li>
                                <p>
                                    Printed name of signatory:
                                    <input type="text" name="signature5" value="<?php echo set_value('signature5', $finalData->signature5); ?>" class="date">
                                </p>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="patch-test">
                    <div class="patch-test-indicate">
                        <p class="font-bold">
                            Consent for Repeat Treatment
                        </p>
                        <p>
                            I certify that I have not been tanning and that no changes to my medical history or medication have taken place since my
                            previous treatment
                        </p>
                    </div>
                    <div class="parent-signature">
                        <ul class="indicate-relation list-inline">
                            <li class="col-sm-10">
                                <input type="text" name="pgname6" value="<?php echo set_value('pgname6', $finalData->pgname6); ?>" class="under-eighteen">
                                <p class="client-signature">Client Signature</p>
                            </li>
                            <li class="col-sm-2">
                                <input type="text" name="date6" value="<?php echo set_value('date6', $finalData->date6); ?>" class=" date" data-provide="datepicker" placeholder="">
                                <p class="client-signature">Date</p>
                            </li>
                        </ul>
                        <ul class="name-of-signatry">
                            <li>
                                <p>
                                    Printed name of signatory:
                                    <input type="text" name="signature6" value="<?php echo set_value('signature6', $finalData->signature6); ?>" class="date">
                                </p>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="patch-test">
                    <div class="patch-test-indicate">
                        <p class="font-bold">
                            Consent for Repeat Treatment
                        </p>
                        <p>
                            I certify that I have not been tanning and that no changes to my medical history or medication have taken place since my
                            previous treatment
                        </p>
                    </div>
                    <div class="parent-signature">
                        <ul class="indicate-relation list-inline">
                            <li class="col-sm-10">
                                <input type="text" name="pgname7" value="<?php echo set_value('pgname7', $finalData->pgname7); ?>" class="under-eighteen">
                                <p class="client-signature">Client Signature</p>
                            </li>
                            <li class="col-sm-2">
                                <input type="text" name="date7" value="<?php echo set_value('date7', $finalData->date7); ?>" class=" date" data-provide="datepicker" placeholder="">
                                <p class="client-signature">Date</p>
                            </li>
                        </ul>
                        <ul class="name-of-signatry">
                            <li>
                                <p>
                                    Printed name of signatory:
                                    <input type="text" name="signature7" value="<?php echo set_value('signature7', $finalData->signature7); ?>" class="date">
                                </p>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="patch-test">
                    <div class="patch-test-indicate">
                        <p class="font-bold">
                            Consent for Repeat Treatment
                        </p>
                        <p>
                            I certify that I have not been tanning and that no changes to my medical history or medication have taken place since my
                            previous treatment
                        </p>
                    </div>
                    <div class="parent-signature">
                        <ul class="indicate-relation list-inline">
                            <li class="col-sm-10">
                                <input type="text" name="pgname8" value="<?php echo set_value('pgname8', $finalData->pgname8); ?>" class="under-eighteen">
                                <p class="client-signature">Client Signature</p>
                            </li>
                            <li class="col-sm-2">
                                <input type="text" name="date8" value="<?php echo set_value('date8', $finalData->date8); ?>" class=" date" data-provide="datepicker" placeholder="">
                                <p class="client-signature">Date</p>
                            </li>
                        </ul>
                        <ul class="name-of-signatry">
                            <li>
                                <p>
                                    Printed name of signatory:
                                    <input type="text" name="signature8" value="<?php echo set_value('signature8', $finalData->signature8); ?>" class="date">
                                </p>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="patch-test">
                    <div class="patch-test-indicate">
                        <p class="font-bold">
                            Consent for Repeat Treatment
                        </p>
                        <p>
                            I certify that I have not been tanning and that no changes to my medical history or medication have taken place since my
                            previous treatment
                        </p>
                    </div>
                    <div class="parent-signature">
                        <ul class="indicate-relation list-inline">
                            <li class="col-sm-10">
                                <input type="text" name="pgname9" value="<?php echo set_value('pgname9', $finalData->pgname9); ?>" class="under-eighteen">
                                <p class="client-signature">Client Signature</p>
                            </li>
                            <li class="col-sm-2">
                                <input type="text" name="date9" value="<?php echo set_value('date9', $finalData->date9); ?>" class=" date" data-provide="datepicker" placeholder="">
                                <p class="client-signature">Date</p>
                            </li>
                        </ul>
                        <ul class="name-of-signatry">
                            <li>
                                <p>
                                    Printed name of signatory:
                                    <input type="text" name="signature9" value="<?php echo set_value('signature9', $finalData->signature9); ?>" class="date">
                                </p>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="patch-test">
                    <div class="patch-test-indicate">
                        <p class="font-bold">
                            Consent for Repeat Treatment
                        </p>
                        <p>
                            I certify that I have not been tanning and that no changes to my medical history or medication have taken place since my
                            previous treatment
                        </p>
                    </div>
                    <div class="parent-signature">
                        <ul class="indicate-relation list-inline">
                            <li class="col-sm-10">
                                <input type="text" name="pgname10" value="<?php echo set_value('pgname10', $finalData->pgname10); ?>" class="under-eighteen">
                                <p class="client-signature">Client Signature</p>
                            </li>
                            <li class="col-sm-2">
                                <input type="text" name="date10" value="<?php echo set_value('date10', $finalData->date10); ?>" class=" date" data-provide="datepicker" placeholder="">
                                <p class="client-signature">Date</p>
                            </li>
                        </ul>
                        <ul class="name-of-signatry">
                            <li>
                                <p>
                                    Printed name of signatory:
                                    <input type="text" name="signature10" value="<?php echo set_value('signature10', $finalData->signature10); ?>" class="date">
                                </p>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="patch-test-border">
                </div>
                <div class="footer">
                    <p>This form is provided to assist with client consultations of persons undergoing aesthetic treatments and
                        for safety reasons must be completed under the direction of a laser and/or intense pulsed light operator
                        who has completed training in the correct use of these forms by the authors Intermed Clinical Ltd only.
                    </p>
                    <p class="copyright-bold">© Copyright 2004 – 2017 Intermed Clinical Ltd – All Rights Reserved</p>
                </div>
            </div>
            <div class="send-submit-div d-flex justify-content-center mt-5">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</section>