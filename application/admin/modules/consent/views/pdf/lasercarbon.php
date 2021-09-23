<style>
    .print_name {
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
                <p class="remove-tatto">Client Information and Consent for Laser Carbon Peel / Laser Carbon Facial Treatments</p>
            </div>
            <div class="laser-procedure">
                <p class="bold-heading-description">DESCRIPTION OF LASER CARBON PEEL & CARBON FACIAL PROCEDURES</p>
                <ul class="special-lasere">
                    <li class="short-pulse">
                        <p>A special Carbon Paste will be applied to areas of your face excluding an area around your eyes and a
                            margin around your mouth. The Carbon Paste is allowed to dry for approximately 10 – 15 minutes and
                            during this time will be absorbed by the superficial dead skin cells of your face but will not penetrate
                            to deeper living cells. A laser with a very short pulse is used to interact with the paste which
                            causes the Carbon to vaporize along with the dead skin cells. The resulting skin will appear fresher,
                            and the skin's pore size will reduce. Often blackheads/whiteheads are removed by the treatment. A
                            series of treatments will induce the deeper layers of the skin to produce new collagen that reduces
                            the appearance of fine lines.
                        </p>
                        <p>
                            If the optional 2 stage Carbon Facial treatment has been chosen a second pass of the laser over areas that have fine lines
                            will be carried out immediately following the removal of the Carbon - this enhances the effects of
                            the laser on the collagen fibres.
                        </p>
                        <p>Each impact on the skin from the laser will cause a slight tingling sensation – there is no pain associated
                            with this Carbon Peel treatment.</p>
                        <p>There is a risk that the laser will have an adverse reaction on the skin in the treated area if your
                            Skin Type is too dark or if you have red spots or pigmented blemishes on your skin at the time of
                            treatment. Precautions will be taken to minimize this risk – your Skin Type will be assessed and
                            any blemishes that may cause problems noted.
                        </p>
                        <p>
                            You should be aware that any excess hair growing on the face will need to be shaved although the normal fine downy hair on
                            many women’s faces will not pose a problem. Male clients will need to have a close shave before the
                            treatment.
                        </p>
                        <p>
                            Your skin type, medical history and medication will be checked during your Consultation to make sure you are suitable for
                            treatment. Test patches will also be carried out during your initial visit to ensure no adverse skin
                            reaction will occur. Your first full treatment cannot be carried out until these test patches have
                            been reviewed by your Practitioner – most clients are able to commence treatment 24 – 48 hrs after
                            the test patch whilst those with slightly darker skin will need to wait for 10 -14 days before the
                            full treatment can begin. Photographs of your treatment will be made to document progress. It is
                            a condition of consent that you allow these test patches and photographs to be carried out.
                        </p>
                    </li>
                </ul>
                <div class="eyes-injury">
                    <p class="bold-heading-description">EYE INJURY</p>
                    <ul class="special-lasere">
                        <li class="short-pulse">
                            <p>Eye injury due to use of lasers is a risk to the client and to the practitioner. However, the risks
                                are almost completely eliminated with the use of proper eyewear. Your eyes will be covered during
                                the laser procedure with goggles similar to those worn in a tanning booth. The practitioner and
                                any other person in the treatment room will be wearing special eyewear that filters out the potential
                                harmful light and allows them to clearly visualize the treatment area.</p>
                        </li>
                    </ul>
                </div>
                <div class="eyes-injury">
                    <p class="bold-heading-description">CLIENT CONSENT FOR TREATMENT</p>
                    <div class="knowledge">
                        <p>My signature below constitutes my acknowledgment that I,
                            <span class="laser-practitioner">
                                <input type="text" class="print_name" name="name" value="<?php echo set_value('name', $finalData->name); ?>" required>
                                <small class="my-name">(print name)</small>
                            </span>
                            am a competent, consenting adult of at least 18 years of age and further, that I: <input type="text" class="print_name" name="name_i" value="<?php echo set_value('name_i', $finalData->name_i); ?>" required>
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
                                <input type="checkbox" name="treatment_recommendations" <?= isset($finalData->treatment_recommendations) ? 'checked' : ''; ?> /> Understand all post treatment recommendations and agree to adhere to them
                            </li>
                            <li class="policy-list">
                                <input type="checkbox" name="test_patches" <?= isset($finalData->test_patches) ? 'checked' : ''; ?> /> Agree that test patches are performed with my signed copies of skin typing, medical history and medication declarations which
                                will be stored securely in accordance with the UK Data Protection Act
                            </li>
                            <li class="policy-list">
                                <input type="checkbox" name="risks_complications" <?= isset($finalData->risks_complications) ? 'checked' : ''; ?> /> Freely assume any risks of complications or injury from known or unknown causes associated with, relating to, or otherwise
                                arising out of this procedure;
                            </li>
                            <li class="policy-list">
                                <input type="checkbox" name="right_consent" <?= isset($finalData->right_consent) ? 'checked' : ''; ?> /> Have the right to consent to or refuse any proposed procedure at any time prior to its performance;
                            </li>
                        </ul>
                        <div class="tatto-remove">
                            <p> I consent to, and authorise
                                <span class="laser-practitioner">
                                    <input type="text" name="pname" value="<?php echo set_value('pname', $finalData->pname); ?>" class="performe-laser" required>
                                    <small class="signature">(Laser Practitioner Name)</small>
                                </span>
                                to perform Laser Carbon Peel / Carbon Laser Facial as follows:
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
                                <input type="text" name="patch_date" value="<?php echo set_value('patch_date', $finalData->patch_date); ?>" class=" date" data-provide="datepicker" required>
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
                            Consent for Subsequent Treatment
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
                            Consent for Subsequent Treatment
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
                            Consent for Subsequent Treatment
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
                            Consent for Subsequent Treatment
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
                            Consent for Subsequent Treatment
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
                            Consent for Subsequent Treatment
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
            </div>
            <div class="send-submit-div d-flex justify-content-center mt-5">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</section>