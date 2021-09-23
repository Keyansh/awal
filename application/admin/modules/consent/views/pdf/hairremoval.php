<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/consent.css">
<?php $finalData = json_decode($data['jsonData']);
// e($finalData);
?>
<section class="laser-tattoo-removl-section">
    <div class="container-fluid">
        <form action="consent/update/<?= $data['id'] ?>" method="post">
            <div class="site-header">
                <p class="client-info">Client Information and Consent for</p>
                <p class="client-info">3 wavelength 755nm+808nm+1064nm Diode Laser hair removal machine</p>

            </div>
            <div class="laser-description">
                <p class="bold-heading">DESCRIPTION OF DIODE LASER HAIR REMOVAL PROCEDURE</p>
                <p>
                    A diode laser uses semiconductor technology that produces coherent projection of light in the visible to infrared range.
                    It uses a light beam with a narrow spectrum to target specific chromophores in the skin. Compared to other
                    laser systems such as the Ruby and Alexandrite, the triple wavelength diode laser wavelength offers the deepest
                    penetration levels and superior melanin absorption. These unique characteristics make the diode laser the
                    most suitable technology for laser hair removal, enabling safe and effective treatment of all skin and hair
                    types, in all body areas
                </p>
                <p>
                    With any light treatment there is a risk that pigmentation to the area can occur and may be more severe than usual. Test
                    patches that will be carried out will show if this is likely to happen and will determine whether treatments
                    can proceed.
                </p>
                <p>
                    It is usual to see a slight reduction after the 1st treatment. However, many treatment sessions may be needed to reduce the
                    Hair completely. It is necessary to wait 6 – 8 weeks between each treatment or 4 -6 weeks depending on body
                    site this allows the hair to be in the correct stage of the hair cycle before the laser sessions continue.
                    It is not possible to accurately forecast how many treatment sessions will be needed as everyone’s hair type
                    is different. In some cases, the last remaining hair may prove resistant to the laser and the area may not
                    be able to be completely removed. That it is why it is termed Hair reduction and not Hair removal
                </p>
                <p>
                    You should be aware that any hair growing in the area must be shaved before treatment and that should be done at home the
                    night before the treatment
                </p>
                <p>
                    Your skin type, medical history and medication will be checked during your Consultation to make sure you are suitable for
                    treatment. Test patches will also be carried out during your initial visit to ensure no adverse skin reaction
                    will occur. Your first full treatment cannot be carried out until these test patches have been reviewed by
                    your Practitioner from 24-48hrs Skin type 1-3 and for skin type 4-6 after 14 days. It is a condition of consent
                    that you allow these test patches to be carried out.
                </p>
            </div>
            <div class="eyes-injury">
                <p class="bold-heading-two">EYE INJURY</p>
                <p>Eye injury due to use of lasers is a risk to the client and to the practitioner. However, the risks are almost
                    completely eliminated with the use of proper eyewear. Your eyes will be covered during any laser procedure
                    either with special safety spectacles or with goggles similar to those worn in a tanning booth. The practitioner
                    and any other person in the treatment room will be wearing special eyewear that filters out the potential
                    harmful light and allows them to clearly visualize the treatment area.</p>

            </div>
            <div class="eyes-injury">
                <p class="bold-heading-two">CLIENT CONSENT FOR TREATMENT</p>
                <p>My signature below constitutes my acknowledgment that I,
                    <input type="text" class="pg-name" name="name" value="<?php echo set_value('name', $finalData->name); ?>" required>(Print Name) am a competent, consenting adult of at least 18 years of age (or my parent or legal guardian
                    is giving consent on my behalf), and further, that I:
                </p>

            </div>
            <div class="eyes-injury">
                <ul class="read-policy">
                    <li class="policy-list">
                        Have read and understood the information provided in this form;
                    </li>
                    <li class="policy-list">
                        Have had my procedure adequately explained to me by my practitioner; </li>
                    <li class="policy-list">
                        Have had the opportunity to ask questions, and all of my questions have been answered to my satisfaction; </li>
                    <li class="policy-list">
                        Have received all of the information I require concerning my procedure;
                    </li>
                    <li class="policy-list">
                        Understand all post treatment recommendations and agree to adhere to them
                    </li>
                    <li class="policy-list">
                        Agree that test patches are performed with my signed copies of skin typing, medical history and medication declarations which
                        will be stored securely in accordance with the UK Data Protection Act
                    </li>
                    <li class="policy-list">
                        Freely assume any risks of complications or injury from known or unknown causes associated with, relating to, or otherwise
                        arising out of this procedure;
                    </li>
                    <li class="policy-list">
                        Have the right to consent to or refuse any proposed procedure at any time prior to its performance;
                    </li>
                </ul>
                <div class="eyes-injury">
                    <p class="bold-heading-two">I consent to, and authorise
                        <input type="text" name="pname" class="authorise" required value="<?php echo set_value('pname', $finalData->pname); ?>">to perform (Laser Practitioner Name) Diode Laser Hair Removal as follows:
                    </p>

                </div>
            </div>
            <div class="eyes-injury">
                <p class="bold-heading-two">
                    Consent for Patch Tests
                </p>
                <div class="parent-signature">
                    <ul class="indicate-relation list-inline">
                        <li>
                            <input type="text" name="patch_name" class="under-eighteen" required value="<?php echo set_value('patch_name', $finalData->patch_name); ?>">
                            <p class="client-signature">Client Signature (or if under 18, signature of parent/guardian)</p>
                        </li>
                        <li>
                            <input type="text" name="patch_date" class=" under-eighteen" data-provide="datepicker" value="<?php echo set_value('patch_date', $finalData->patch_date); ?>" required>
                            <p class="client-signature">Date</p>
                        </li>
                    </ul>
                    <div class="eyes-injury">
                        <ul class="zero-padding">
                            <li>
                                <p>Printed name of signatory:
                                    <input type="text" name="patch_signature" class="signatory" required value="<?php echo set_value('patch_signature', $finalData->patch_signature); ?>">
                                </p>
                            </li>
                            <li>
                                <p>If signed by other than the client, indicate relationship:
                                    <input type="text" name="relation" class="signatory" required value="<?php echo set_value('relation', $finalData->relation); ?>">
                                </p>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="first-treatment-tatto">
                <div class="consent-first-treatment">
                    <p class="bold-heading-two">
                        Consent for First Treatment
                    </p>
                    <div class="eyes-injury">
                        <p>I certify that I have not been tanning and that no changes to my medical history or medication have taken
                            place since my Patch Tests</p>
                    </div>
                    <div class="parent-signature">
                        <div class="eyes-injury">
                            <ul class="indicate-relation list-inline">
                                <li>
                                    <input type="text" name="first_name" class="under-eighteen" value="<?php echo set_value('first_name', $finalData->first_name); ?>">
                                    <p class="client-signature">Client Signature (or if under 18, signature of parent/guardian)</p>
                                </li>
                                <li>
                                    <input type="text" name="first_date" class=" under-eighteen" data-provide="datepicker" value="<?php echo set_value('first_date', $finalData->first_date); ?>">
                                    <p class="client-signature">Date</p>
                                </li>
                            </ul>
                        </div>

                        <div class="eyes-injury">
                            <ul class="zero-padding">
                                <li>
                                    <p>Printed name of signatory:
                                        <input type="text" name="first_signature" class="signatory" value="<?php echo set_value('first_signature', $finalData->first_signature); ?>">
                                    </p>
                                </li>
                                <li>
                                    <p>If signed by other than the client, indicate relationship:
                                        <input type="text" name="first_relation" class="signatory" value="<?php echo set_value('first_relation', $finalData->first_relation); ?>">
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="consent-first-treatment">
                        <p class="bold-heading-two">
                            Consent for Subsequent Treatment
                        </p>
                        <div class="eyes-injury">
                            <p>I certify that I have not been tanning and that no changes to my medical history or medication have
                                taken place since my Patch Tests</p>
                        </div>
                        <div class="parent-signature">
                            <div class="eyes-injury">
                                <ul class="indicate-relation list-inline">
                                    <li>
                                        <input type="text" name="pgname1" class="under-eighteen" value="<?php echo set_value('pgname1', $finalData->pgname1); ?>">
                                        <p class="client-signature">Client Signature (or if under 18, signature of parent/guardian)</p>
                                    </li>
                                    <li>
                                        <input type="text" name="date1" class=" under-eighteen" data-provide="datepicker" value="<?php echo set_value('date1', $finalData->date1); ?>">
                                        <p class="client-signature">Date</p>
                                    </li>
                                </ul>
                            </div>

                            <div class="eyes-injury">
                                <ul class="zero-padding">
                                    <li>
                                        <p>Printed name of signatory:
                                            <input type="text" name="signature1" class="signatory" value="<?php echo set_value('signature1', $finalData->signature1); ?>">
                                        </p>
                                    </li>
                                    <li>
                                        <p>If signed by other than the client, indicate relationship:
                                            <input type="text" name="relation1" class="signatory" value="<?php echo set_value('relation1', $finalData->relation1); ?>">
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="consent-first-treatment">
                        <p class="bold-heading-two">
                            Consent for Subsequent Treatment
                        </p>
                        <div class="eyes-injury">
                            <p>I certify that I have not been tanning and that no changes to my medical history or medication have
                                taken place since my Patch Tests</p>
                        </div>
                        <div class="parent-signature">
                            <div class="eyes-injury">
                                <ul class="indicate-relation list-inline">
                                    <li>
                                        <input type="text" name="pgname2" class="under-eighteen" value="<?php echo set_value('pgname2', $finalData->pgname2); ?>">
                                        <p class="client-signature">Client Signature (or if under 18, signature of parent/guardian)</p>
                                    </li>
                                    <li>
                                        <input type="text" name="date2" class=" under-eighteen" data-provide="datepicker" value="<?php echo set_value('date2', $finalData->date2); ?>">
                                        <p class="client-signature">Date</p>
                                    </li>
                                </ul>
                            </div>

                            <div class="eyes-injury">
                                <ul class="zero-padding">
                                    <li>
                                        <p>Printed name of signatory:
                                            <input type="text" name="signature2" value="<?php echo set_value('signature2', $finalData->signature2); ?>" class="signatory">
                                        </p>
                                    </li>
                                    <li>
                                        <p>If signed by other than the client, indicate relationship:
                                            <input type="text" name="relation2" value="<?php echo set_value('relation2', $finalData->relation2); ?>" class="signatory">
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="consent-first-treatment">
                        <p class="bold-heading-two">
                            Consent for Subsequent Treatment
                        </p>
                        <div class="eyes-injury">
                            <p>I certify that I have not been tanning and that no changes to my medical history or medication have
                                taken place since my Patch Tests</p>
                        </div>
                        <div class="parent-signature">
                            <div class="eyes-injury">
                                <ul class="indicate-relation list-inline">
                                    <li>
                                        <input type="text" name="pgname3" value="<?php echo set_value('pgname3', $finalData->pgname3); ?>" class="under-eighteen">
                                        <p class="client-signature">Client Signature (or if under 18, signature of parent/guardian)</p>
                                    </li>
                                    <li>
                                        <input type="text" name="date3" value="<?php echo set_value('date3', $finalData->date3); ?>" class=" under-eighteen" data-provide="datepicker">
                                        <p class="client-signature">Date</p>
                                    </li>
                                </ul>
                            </div>

                            <div class="eyes-injury">
                                <ul class="zero-padding">
                                    <li>
                                        <p>Printed name of signatory:
                                            <input type="text" name="signature3" value="<?php echo set_value('signature3', $finalData->signature3); ?>" class="signatory">
                                        </p>
                                    </li>
                                    <li>
                                        <p>If signed by other than the client, indicate relationship:
                                            <input type="text" name="relation3" value="<?php echo set_value('relation3', $finalData->relation3); ?>" class="signatory">
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="consent-first-treatment">
                        <p class="bold-heading-two">
                            Consent for Subsequent Treatment
                        </p>
                        <div class="eyes-injury">
                            <p>I certify that I have not been tanning and that no changes to my medical history or medication have
                                taken place since my Patch Tests</p>
                        </div>
                        <div class="parent-signature">
                            <div class="eyes-injury">
                                <ul class="indicate-relation list-inline">
                                    <li>
                                        <input type="text" name="pgname4" value="<?php echo set_value('pgname4', $finalData->pgname4); ?>" class="under-eighteen">
                                        <p class="client-signature">Client Signature (or if under 18, signature of parent/guardian)</p>
                                    </li>
                                    <li>
                                        <input type="text" name="date4" value="<?php echo set_value('date4', $finalData->date4); ?>" class=" under-eighteen" data-provide="datepicker" placeholder="">
                                        <p class="client-signature">Date</p>
                                    </li>
                                </ul>
                            </div>

                            <div class="eyes-injury">
                                <ul class="zero-padding">
                                    <li>
                                        <p>Printed name of signatory:
                                            <input type="text" name="signature4" value="<?php echo set_value('signature4', $finalData->signature4); ?>" class="signatory">
                                        </p>
                                    </li>
                                    <li>
                                        <p>If signed by other than the client, indicate relationship:
                                            <input type="text" name="relation4" value="<?php echo set_value('relation4', $finalData->relation4); ?>" class="signatory">
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="consent-first-treatment">
                        <p class="bold-heading-two">
                            Consent for Subsequent Treatment
                        </p>
                        <div class="eyes-injury">
                            <p>I certify that I have not been tanning and that no changes to my medical history or medication have
                                taken place since my Patch Tests</p>
                        </div>
                        <div class="parent-signature">
                            <div class="eyes-injury">
                                <ul class="indicate-relation list-inline">
                                    <li>
                                        <input type="text" name="pgname5" value="<?php echo set_value('pgname5', $finalData->pgname5); ?>" class="under-eighteen">
                                        <p class="client-signature">Client Signature (or if under 18, signature of parent/guardian)</p>
                                    </li>
                                    <li>
                                        <input type="text" name="date5" value="<?php echo set_value('date5', $finalData->date5); ?>" class=" under-eighteen" data-provide="datepicker" placeholder="">
                                        <p class="client-signature">Date</p>
                                    </li>
                                </ul>
                            </div>

                            <div class="eyes-injury">
                                <ul class="zero-padding">
                                    <li>
                                        <p>Printed name of signatory:
                                            <input type="text" name="signature5" value="<?php echo set_value('signature5', $finalData->signature5); ?>" class="signatory">
                                        </p>
                                    </li>
                                    <li>
                                        <p>If signed by other than the client, indicate relationship:
                                            <input type="text" name="relation5" value="<?php echo set_value('relation5', $finalData->relation5); ?>" class="signatory">
                                        </p>
                                    </li>
                                </ul>
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