<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/consent.css">
<?php $finalData = json_decode($data['jsonData']);
// e($finalData);
$this->load->view('inc-messages');
?>
<section class="client-information-and-consent">
    <div class="container-fluid">
        <form action="consent/update/<?= $data['id'] ?>" method="post">
            <div class="word-header">
                <p>Client Information and Consent for IPL & E-Light Treatments
                </p>
            </div>
            <div class="word-body">
                <p>This consent form includes general descriptions of various dermatological treatments, including possible benefits
                    and risks that may occur as a result of these treatments. The Aesthetic Practitioner responsible for your
                    treatment will describe and discuss the specific details of your procedure with you and answer your questions.
                    Please read the applicable sections of this consent form carefully. This form may contain words that are
                    unfamiliar to you. Please ask your Practitioner to explain any words or information that you do not clearly
                    understand. You may take home an unsigned copy of this consent form to think about or discuss with family
                    or friends before making your decision.</p>
                <div>
                    <p class="font-bold">
                        What is IPL & E-Light?
                    </p>
                </div>
                <div>
                    <p>
                        The system used delivers IPL Intense Pulsed Light and may also deliver electrical energy pulsed at the same frequency as
                        radio waves which is known as Radiofrequency current. This Radiofrequency energy is used combined with
                        Intense Pulsed Light when it is known as E-Light. E-Light has the benefit of causing less discomfort
                        than Intense Pulsed Light alone and can also be used on some darker skin types. Radiofrequency current
                        is the same type of energy used in hair removal by electrolysis – a slight tingling may be felt and some
                        heating of the treatment area may occur. This heating should be counteracted by the cooling pulse delays
                        applied to the skin throughout the treatment.

                    </p>
                    <p>
                        Certain Medical conditions will preclude you from having any treatments involving Radiofrequency along with the need to remove
                        metal bracelets, earrings etc. Your medical history and medication will be reviewed to decide if you
                        are suitable for this type of treatment
                    </p>
                </div>
                <div>
                    <p class="font-bold">
                        PROCEDURES – Please read the description relevant to your proposed treatment:
                    </p>
                    <ul class="treatment-list">
                        <li>
                            <p class="font-bold">
                                Treatment of Vascular & Pigmented Lesions
                            </p>
                            <p>
                                E-Light or IPL non-ablative (no removal of body tissue) treatment is a technique for eliminating blemished areas from the
                                skin. This is a useful treatment method for both ageing skin and skin with sun damage. The E-Light
                                or IPL system is designed to penetrate into the lower layers of the skin without injuring the
                                outer layers. Photographs of the treatment area may be taken for your records and future comparison.
                                Multiple treatments may be necessary to achieve complete satisfaction. Short-term redness can
                                be expected.

                            </p>
                            <p>
                                Benefits of this treatment include the possible reduction or elimination of unsightly pigmented lesions like solar spots
                                or uneven skin colour. Small red blood vessels on the face may be reduced or diminished.
                            </p>
                            <p>
                                Possible risks or discomforts (side effects) may include pain, burning, blister formation, and stinging sensation, infection,
                                pigmentary changes including decrease or increase in skin colour at the site of treatment, scar
                                formation, induced "cold-sore-like" blistering, skin eruptions known as "herpetic" skin eruptions
                                at the site of treatment and poor cosmetic outcome. There may also be possible hair removal at
                                the site of treatment.
                            </p>
                            <p>
                                Please note that these risks and side effects will be minimized or completely eliminated by the use of test patches before
                                your full treatment
                            </p>

                        </li>
                        <li>
                            <p class="font-bold">
                                E-Light & IPL Hair Removal
                            </p>
                            <p>
                                The system is designed to target and destroy the hair follicle. The procedure involves shaving the hair from the treatment
                                area before the treatment with special wavelengths of light. Photographs of the treatment area
                                may be taken for your records and future comparison

                            </p>
                            <p>
                                Benefits of this treatment are delayed re-growth of the hair, lightening of the hair, decreased density of the hair and long
                                term or permanent reduction in the number of hairs growing in the treatment areas. Multiple treatments
                                are required to achieve long term hair reduction. Short term redness and some swelling may be
                                experienced. Possible risks or discomforts (side effects) may include pain, burning, blister
                                formation, and stinging sensation, infection, pigmentary changes including decrease or increase
                                in skin color at the site of treatment, scar formation, "cold-sore-like" blistering, skin eruptions
                                known as "herpetic" skin eruptions at the site of treatment and poor cosmetic outcome. Recurrence
                                of hair growth at the treatment sites is also a possibility.

                            </p>
                            <p>
                                Please note that these risks and side effects will be minimized or completely eliminated by the use of test patches before
                                your treatment
                            </p>
                        </li>
                        <li>
                            <p class="font-bold">
                                E-Light & IPL Skin Rejuvenation
                            </p>
                            <p>
                                The E-Light/IPL system has the ability to interact with blood vessels causing them to release chemicals which stimulate the
                                production of new collagen fibres reducing the appearance of fine lines and wrinkles. It will
                                also have a direct effect on existing collagen fibres, heating and denaturing them which will
                                also stimulate new collagen fibre production. These effects may require multiple treatments and
                                the subtle changes to the appearance of the skin may not be apparent immediately. Photographs
                                may be taken before and during your procedure to document progress of the treatment. Short term
                                redness and some swelling may be expected. Possible risks or discomforts (side effects) may include
                                pain, burning, blister formation, and stinging sensation, infection, pigmentary changes including
                                decrease or increase in skin color at the site of treatment, scar formation, "cold-sore-like"
                                blistering, skin eruptions known as "herpetic" skin eruptions at the site of treatment and poor
                                cosmetic outcome. Hair growth may be affected at the treatment site. Please note that these risks
                                and side effects will be minimized by the use of test patches before your treatment
                            </p>
                        </li>
                        <li>
                            <p class="font-bold">
                                E-Light & IPL Active Acne Therapy
                            </p>
                            <p>
                                Acne bacteria residing in the sebaceous glands, contain a biochemical called Porphyrin which when activated by certain wavelengths
                                of light causes the death of the bacterial cells. The E- Light system that will be used for your
                                treatment is able to deliver the special wavelength of light needed to bring about this destruction
                                of the Acne bacteria. Several treatments may be needed before an improvement is seen. Unfortunately
                                because it is impossible to kill all the Acne bacteria in any one session, the condition usually
                                recurs but hopefully a reduction in the number of active acne pustules will be achieved. Photographs
                                may be taken before and during your procedure to document progress of the treatment. Short term
                                redness and some swelling may occur. Possible risks or discomforts (side effects) may include
                                pain, burning, blister formation, and stinging sensation, infection, pigmentary changes including
                                decrease or increase in skin colour at the site of treatment, scar formation, "cold-sore-like"
                                blistering, skin eruptions known as "herpetic" skin eruptions at the site of treatment and poor
                                cosmetic outcome. Hair growth may be affected at the treatment site. Please note that these risks
                                and side effects will be minimized by the use of test patches before your treatment
                            </p>
                        </li>
                        <li>
                            <p class="font-bold">
                                General Treatment Risks
                            </p>
                            <p>
                                Eye injury due to use of Intense Pulsed Light/E-Light is a risk to the client and to the practitioner. However, the risks
                                are eliminated with the use of proper eyewear. Your eyes will be covered during any light based
                                IPL/E-light procedure either with special safety spectacles or with goggles similar to those
                                worn in a tanning booth.
                            </p>
                            <p>
                                The practitioner and any other person in the treatment room will be wearing special eyewear that filters out the potential
                                harmful light and allows them to clearly visualize the treatment area.
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="treatment">
                    <div class="client-consent">
                        <p class="font-bold">
                            CLIENT CONSENT FOR TREATMENT
                        </p>
                        <p>
                            My signature below constitutes my acknowledgment that I,
                            <input type="text" name="name" value="<?php echo set_value('name', $finalData->name); ?>" required class="my-signature-type"> am a competent, consenting adult of at least 18 years of age (or my parent or legal
                            guardian is giving consent on my behalf), and further, that I: <input type="text" name="name_i" value="<?php echo set_value('name_i', $finalData->name_i); ?>" required class="my-signature-type">
                        </p>
                        <ul class="list-unstyled">
                            <li>
                                <p><input type="checkbox" name="understood_information" <?= isset($finalData->understood_information) ? 'checked' : '' ?> /> Have read and understand the information provided in this form;</p>
                            </li>
                            <li>
                                <p><input type="checkbox" name="procedure_explained" <?= isset($finalData->procedure_explained) ? 'checked' : '' ?> /> Have had my procedure adequately explained to me by my practitioner;</p>
                            </li>
                            <li>
                                <p><input type="checkbox" name="opportunity_questions" <?= isset($finalData->opportunity_questions) ? 'checked' : '' ?> /> Have had the opportunity to ask questions, and all of my questions have been answered to my satisfaction;</p>
                            </li>
                            <li>
                                <p><input type="checkbox" name="treatment_recommendations" <?= isset($finalData->treatment_recommendations) ? 'checked' : '' ?> /> Understand all post treatment recommendations and agree to adhere to them;</p>
                            </li>
                            <li>
                                <p>
                                    <input type="checkbox" name="risks_complications" <?= isset($finalData->risks_complications) ? 'checked' : '' ?> /> Freely assume any risks of complications or injury from known or unknown causes associated with, relating to, or otherwise
                                    arising out of this procedure;
                                </p>
                            </li>
                            <li>
                                <p>
                                    <input type="checkbox" name="right_consent" <?= isset($finalData->right_consent) ? 'checked' : '' ?> /> Have the right to consent to or refuse any proposed procedure at any time prior to its performance;
                                </p>
                            </li>
                            <li>
                                <p>
                                    <input type="checkbox" name="consent_authorise" <?= isset($finalData->consent_authorise) ? 'checked' : '' ?> /> Consent to, and authorise
                                    <span class="radio-treatment">
                                        <input type="text" class="my-signature-type" name="practitionername" value="<?php echo set_value('practitionername', $finalData->practitionername); ?>" required>
                                        <small>(Practitioner Name)</small>
                                    </span>
                                    to perform the
                                    <input type="text" class="under-eighteen-year" name="nameofprocedure" value="<?php echo set_value('nameofprocedure', $finalData->nameofprocedure); ?>" required>E-Light IPL treatment

                                <p class="procedure-name">(Print Name of Procedure to Be Carried Out)</p>

                                </p>
                            </li>
                        </ul>

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
                                <textarea type="text" class="under-eighteen" name="clientSignature" value="" required><?php echo set_value('clientSignature', $finalData->clientSignature); ?></textarea>
                                <p class="client-signature">Client Signature (or if under 18, signature of parent/guardian)</p>
                            </li>
                            <li class="col-sm-2">
                                <input type="text" class="date datepickernk" id="datepickernk" name="date" value="<?php echo set_value('date', $finalData->date); ?>" required>
                                <p class="client-signature">Date</p>
                            </li>

                        </ul>
                        <ul class="name-of-signatry">
                            <li>
                                <p>
                                    Printed name of signatory:
                                    <input type="text" class="date" name="nameofsignatory" value="<?php echo set_value('nameofsignatory', $finalData->nameofsignatory); ?>" required>
                                </p>
                            </li>
                            <li>
                                <p>
                                    If signed by other than the client, indicate relationship:
                                    <input type="text" class="date" name="relationship" value="<?php echo set_value('relationship', $finalData->relationship); ?>" required>
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
                    </div>
                    <div class="parent-signature">
                        <ul class="indicate-relation list-inline">
                            <li class="col-sm-10">
                                <textarea type="text" class="under-eighteen" name="clientSignature1" value=""><?php echo set_value('clientSignature1', $finalData->clientSignature1); ?></textarea>
                                <p class="client-signature">Client Signature (or if under 18, signature of parent/guardian)</p>
                            </li>
                            <li class="col-sm-2">
                                <input type="text" class="date datepickernk" name="date1" value="<?php echo set_value('date1', $finalData->date1); ?>">
                                <p class="client-signature">Date</p>
                            </li>

                        </ul>
                        <ul class="name-of-signatry">
                            <li>
                                <p>
                                    Printed name of signatory:
                                    <input type="text" class="date" name="nameofsignatory1" value="<?php echo set_value('nameofsignatory1', $finalData->nameofsignatory1); ?>">
                                </p>
                            </li>
                            <li>
                                <p>
                                    If signed by other than the client, indicate relationship:
                                    <input type="text" class="date" name="relationship1" value="<?php echo set_value('relationship1', $finalData->relationship1); ?>">
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
                        <p>I certify that I have not been tanning and that no changes to my medical history or medication have taken place since my previous treatment</p>
                    </div>
                    <div class="parent-signature">
                        <ul class="indicate-relation list-inline">
                            <li class="col-sm-10">
                                <textarea type="text" class="under-eighteen" name="clientSignature2" value=""><?php echo set_value('clientSignature2', $finalData->clientSignature2); ?></textarea>
                                <p class="client-signature">Client Signature (or if under 18, signature of parent/guardian)</p>
                            </li>
                            <li class="col-sm-2">
                                <input type="text" class="date datepickernk" name="date2" value="<?php echo set_value('date2', $finalData->date2); ?>">
                                <p class="client-signature">Date</p>
                            </li>

                        </ul>
                        <ul class="name-of-signatry">
                            <li>
                                <p>
                                    Printed name of signatory:
                                    <input type="text" class="date" name="nameofsignatory2" value="<?php echo set_value('nameofsignatory2', $finalData->nameofsignatory2); ?>">
                                </p>
                            </li>
                            <li>
                                <p>
                                    If signed by other than the client, indicate relationship:
                                    <input type="text" class="date" name="relationship2" value="<?php echo set_value('relationship2', $finalData->relationship2); ?>">
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
                        <p>I certify that I have not been tanning and that no changes to my medical history or medication have taken place since my previous treatment</p>
                    </div>
                    <div class="parent-signature">
                        <ul class="indicate-relation list-inline">
                            <li class="col-sm-10">
                                <textarea type="text" class="under-eighteen" name="clientSignature3" value=""><?php echo set_value('clientSignature3', $finalData->clientSignature3); ?></textarea>
                                <p class="client-signature">Client Signature (or if under 18, signature of parent/guardian)</p>
                            </li>
                            <li class="col-sm-2">
                                <input type="text" class="date datepickernk" name="date3" value="<?php echo set_value('date3', $finalData->date3); ?>">
                                <p class="client-signature">Date</p>
                            </li>

                        </ul>
                        <ul class="name-of-signatry">
                            <li>
                                <p>
                                    Printed name of signatory:
                                    <input type="text" class="date" name="nameofsignatory3" value="<?php echo set_value('nameofsignatory3', $finalData->nameofsignatory3); ?>">
                                </p>
                            </li>
                            <li>
                                <p>
                                    If signed by other than the client, indicate relationship:
                                    <input type="text" class="date" name="relationship3" value="<?php echo set_value('relationship3', $finalData->relationship3); ?>">
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
                        <p>I certify that I have not been tanning and that no changes to my medical history or medication have taken place since my previous treatment</p>
                    </div>
                    <div class="parent-signature">
                        <ul class="indicate-relation list-inline">
                            <li class="col-sm-10">
                                <textarea type="text" class="under-eighteen" name="clientSignature4" value=""><?php echo set_value('clientSignature4', $finalData->clientSignature4); ?></textarea>
                                <p class="client-signature">Client Signature (or if under 18, signature of parent/guardian)</p>
                            </li>
                            <li class="col-sm-2">
                                <input type="text" class="date datepickernk" name="date4" value="<?php echo set_value('date4', $finalData->date4); ?>">
                                <p class="client-signature">Date</p>
                            </li>

                        </ul>
                        <ul class="name-of-signatry">
                            <li>
                                <p>
                                    Printed name of signatory:
                                    <input type="text" class="date" name="nameofsignatory4" value="<?php echo set_value('nameofsignatory4', $finalData->nameofsignatory4); ?>">
                                </p>
                            </li>
                            <li>
                                <p>
                                    If signed by other than the client, indicate relationship:
                                    <input type="text" class="date" name="relationship4" value="<?php echo set_value('relationship4', $finalData->relationship4); ?>">
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
                        <p>I certify that I have not been tanning and that no changes to my medical history or medication have taken place since my previous treatment</p>
                    </div>
                    <div class="parent-signature">
                        <ul class="indicate-relation list-inline">
                            <li class="col-sm-10">
                                <textarea type="text" class="under-eighteen" name="clientSignature5" value=""><?php echo set_value('clientSignature5', $finalData->clientSignature5); ?></textarea>
                                <p class="client-signature">Client Signature (or if under 18, signature of parent/guardian)</p>
                            </li>
                            <li class="col-sm-2">
                                <input type="text" class="date datepickernk" name="date5" value="<?php echo set_value('date5', $finalData->date5); ?>">
                                <p class="client-signature">Date</p>
                            </li>

                        </ul>
                        <ul class="name-of-signatry">
                            <li>
                                <p>
                                    Printed name of signatory:
                                    <input type="text" class="date" name="nameofsignatory5" value="<?php echo set_value('nameofsignatory5', $finalData->nameofsignatory5); ?>">
                                </p>
                            </li>
                            <li>
                                <p>
                                    If signed by other than the client, indicate relationship:
                                    <input type="text" class="date" name="relationship5" value="<?php echo set_value('relationship5', $finalData->relationship5); ?>">
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
                        <p>I certify that I have not been tanning and that no changes to my medical history or medication have taken place since my previous treatment</p>
                    </div>
                    <div class="parent-signature">
                        <ul class="indicate-relation list-inline">
                            <li class="col-sm-10">
                                <textarea type="text" class="under-eighteen" name="clientSignature6" value=""><?php echo set_value('clientSignature6', $finalData->clientSignature6); ?></textarea>
                                <p class="client-signature">Client Signature (or if under 18, signature of parent/guardian)</p>
                            </li>
                            <li class="col-sm-2">
                                <input type="text" class="date datepickernk" name="date6" value="<?php echo set_value('date6', $finalData->date6); ?>">
                                <p class="client-signature">Date</p>
                            </li>

                        </ul>
                        <ul class="name-of-signatry">
                            <li>
                                <p>
                                    Printed name of signatory:
                                    <input type="text" class="date" name="nameofsignatory6" value="<?php echo set_value('nameofsignatory6', $finalData->nameofsignatory6); ?>">
                                </p>
                            </li>
                            <li>
                                <p>
                                    If signed by other than the client, indicate relationship:
                                    <input type="text" class="date" name="relationship6" value="<?php echo set_value('relationship6', $finalData->relationship6); ?>">
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
                        <p>I certify that I have not been tanning and that no changes to my medical history or medication have taken place since my previous treatment</p>
                    </div>
                    <div class="parent-signature">
                        <ul class="indicate-relation list-inline">
                            <li class="col-sm-10">
                                <textarea type="text" class="under-eighteen" name="clientSignature7" value=""><?php echo set_value('clientSignature7', $finalData->clientSignature7); ?></textarea>
                                <p class="client-signature">Client Signature (or if under 18, signature of parent/guardian)</p>
                            </li>
                            <li class="col-sm-2">
                                <input type="text" class="date datepickernk" name="date7" value="<?php echo set_value('date7', $finalData->date7); ?>">
                                <p class="client-signature">Date</p>
                            </li>

                        </ul>
                        <ul class="name-of-signatry">
                            <li>
                                <p>
                                    Printed name of signatory:
                                    <input type="text" class="date" name="nameofsignatory7" value="<?php echo set_value('nameofsignatory7', $finalData->nameofsignatory7); ?>">
                                </p>
                            </li>
                            <li>
                                <p>
                                    If signed by other than the client, indicate relationship:
                                    <input type="text" class="date" name="relationship7" value="<?php echo set_value('relationship7', $finalData->relationship7); ?>">
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
                        <p>I certify that I have not been tanning and that no changes to my medical history or medication have taken place since my previous treatment</p>
                    </div>
                    <div class="parent-signature">
                        <ul class="indicate-relation list-inline">
                            <li class="col-sm-10">
                                <textarea type="text" class="under-eighteen" name="clientSignature8" value=""><?php echo set_value('clientSignature8', $finalData->clientSignature8); ?></textarea>
                                <p class="client-signature">Client Signature (or if under 18, signature of parent/guardian)</p>
                            </li>
                            <li class="col-sm-2">
                                <input type="text" class="date datepickernk" name="date8" value="<?php echo set_value('date8', $finalData->date8); ?>">
                                <p class="client-signature">Date</p>
                            </li>

                        </ul>
                        <ul class="name-of-signatry">
                            <li>
                                <p>
                                    Printed name of signatory:
                                    <input type="text" class="date" name="nameofsignatory8" value="<?php echo set_value('nameofsignatory8', $finalData->nameofsignatory8); ?>">
                                </p>
                            </li>
                            <li>
                                <p>
                                    If signed by other than the client, indicate relationship:
                                    <input type="text" class="date" name="relationship8" value="<?php echo set_value('relationship8', $finalData->relationship8); ?>">
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
                        <p>I certify that I have not been tanning and that no changes to my medical history or medication have taken place since my previous treatment</p>
                    </div>
                    <div class="parent-signature">
                        <ul class="indicate-relation list-inline">
                            <li class="col-sm-10">
                                <textarea type="text" class="under-eighteen" name="clientSignature9" value=""><?php echo set_value('clientSignature9', $finalData->clientSignature9); ?></textarea>
                                <p class="client-signature">Client Signature (or if under 18, signature of parent/guardian)</p>
                            </li>
                            <li class="col-sm-2">
                                <input type="text" class="date datepickernk" name="date9" value="<?php echo set_value('date9', $finalData->date9); ?>">
                                <p class="client-signature">Date</p>
                            </li>

                        </ul>
                        <ul class="name-of-signatry">
                            <li>
                                <p>
                                    Printed name of signatory:
                                    <input type="text" class="date" name="nameofsignatory9" value="<?php echo set_value('nameofsignatory9', $finalData->nameofsignatory9); ?>">
                                </p>
                            </li>
                            <li>
                                <p>
                                    If signed by other than the client, indicate relationship:
                                    <input type="text" class="date" name="relationship9" value="<?php echo set_value('relationship9', $finalData->relationship9); ?>">
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
                        <p>I certify that I have not been tanning and that no changes to my medical history or medication have taken place since my previous treatment</p>
                    </div>
                    <div class="parent-signature">
                        <ul class="indicate-relation list-inline">
                            <li class="col-sm-10">
                                <textarea type="text" class="under-eighteen" name="clientSignature10" value=""><?php echo set_value('clientSignature10', $finalData->clientSignature10); ?></textarea>
                                <p class="client-signature">Client Signature (or if under 18, signature of parent/guardian)</p>
                            </li>
                            <li class="col-sm-2">
                                <input type="text" class="date datepickernk" name="date10" value="<?php echo set_value('date10', $finalData->date10); ?>">
                                <p class="client-signature">Date</p>
                            </li>

                        </ul>
                        <ul class="name-of-signatry">
                            <li>
                                <p>
                                    Printed name of signatory:
                                    <input type="text" class="date" name="nameofsignatory10" value="<?php echo set_value('nameofsignatory10', $finalData->nameofsignatory10); ?>">
                                </p>
                            </li>
                            <li>
                                <p>
                                    If signed by other than the client, indicate relationship:
                                    <input type="text" class="date" name="relationship10" value="<?php echo set_value('relationship10', $finalData->relationship10); ?>">
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
                        <p>I certify that I have not been tanning and that no changes to my medical history or medication have taken place since my previous treatment</p>
                    </div>
                    <div class="parent-signature">
                        <ul class="indicate-relation list-inline">
                            <li class="col-sm-10">
                                <textarea type="text" class="under-eighteen" name="clientSignature11" value=""><?php echo set_value('clientSignature11', $finalData->clientSignature11); ?></textarea>
                                <p class="client-signature">Client Signature (or if under 18, signature of parent/guardian)</p>
                            </li>
                            <li class="col-sm-2">
                                <input type="text" class="date datepickernk" name="date11" value="<?php echo set_value('date11', $finalData->date11); ?>">
                                <p class="client-signature">Date</p>
                            </li>

                        </ul>
                        <ul class="name-of-signatry">
                            <li>
                                <p>
                                    Printed name of signatory:
                                    <input type="text" class="date" name="nameofsignatory11" value="<?php echo set_value('nameofsignatory11', $finalData->nameofsignatory11); ?>">
                                </p>
                            </li>
                            <li>
                                <p>
                                    If signed by other than the client, indicate relationship:
                                    <input type="text" class="date" name="relationship11" value="<?php echo set_value('relationship11', $finalData->relationship11); ?>">
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
<script>
    $(document).ready(function() {
        $('.datepickernk').datepicker({
            format: 'dd/mm/yyyy'
        });
    });
</script>