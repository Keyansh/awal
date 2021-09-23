<style>
    p {
        margin: 0 0 10px;
    }

    .radio-span {
        display: inline-block;
        height: 30px;
        width: 30px;
        border-radius: 50%;
        border: 2px solid blue;
        position: relative;
    }

    .radio-span.active::after {
        content: "";
        position: absolute;
        height: 90%;
        width: 90%;
        top: 50%;
        left: 50%;
        border-radius: 50%;
        background: blue;
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
        <form action="consent/update/<?= $data['id'] ?>" method="post">
            <div class="info-consent text-center">
                <p class="main-heading">
                    Emsculpt Informed Consent
                </p>
            </div>
            <div class="word-body">
                <div>
                    <ul class="treatment-list">
                        <li>
                            <p class="font-bold">Patient Name:
                                <input type="text" class="signatory" name="name" value="<?php echo set_value('name', $finalData->name); ?>" required>
                            </p>
                        </li>
                        <li>
                            <p class="font-bold">Date:
                                <input type="text" class="signatory datepickernk" name="date" value="<?php echo set_value('date', $finalData->date); ?>" required>
                            </p>
                        </li>
                        <li>
                            <p class="Emsculpt Informed understood">
                                Please read the following and accept you have understood by initialling
                            </p>
                        </li>
                        <li>
                            <p>
                                You are scheduled for a series of non-invasive treatments with the Emsculpt. The device is indicated for improvement of abdominal
                                tone, strengthening of the abdominal muscles, development of firmer abdomen. strengthening, toning
                                of muscles and firming of buttock.
                                <span class="intials-bold">Initials:</span>
                            </p>
                        </li>
                        <li>
                            <p>
                                Your treatment provider will discuss your specific treatment needs,
                            </p>
                        </li>
                        <li>
                            <p class="Emsculpt Informed understood">
                                Recommended number of treatments is 4.
                                <span class="intials-bold">Initials:</span>
                            </p>
                        </li>
                        <li>
                            <p>
                                The treatment is typically 30 minutes per session, with sessions separated by at least two days. Completing a full treatment
                                series is necessary to maximize treatment efficacy. You may need additional treatments depending
                                on your goals.
                                <span class="intials-bold">Initials:</span>
                            </p>
                        </li>
                        <li>
                            <p>
                                Before the treatment, you are not required to do anything special, however, keeping your body well hydrated is recommended.
                                On the day of treatment, you are advised to wear comfortable clothing which allows flexibility
                                for correct positioning during the treatment. You will be asked to remove all metallic accessories
                                and electronics devices.
                                <span class="intials-bold">Initials:</span>
                            </p>
                        </li>
                        <li>
                            <p>
                                I acknowledge that a successful treatment outcome can be affected by smoking or excessive alcohol consumption, as well as:
                                eating disorders or on-going medication. While no special diet is required, you are encouraged
                                to eat healthy to help promote and maintain results.
                                <span class="intials-bold">Initials:</span>
                            </p>
                        </li>
                        <li>
                            <p>
                                The treatment does not require anaesthesia. During the application, you will feel intense muscle contractions in the treated
                                area. The procedure doesn’t require any recovery time. Typically, you can get back to your daily
                                routine right after the treatment.
                                <span class="intials-bold">Initials:</span>
                            </p>
                        </li>
                        <li>
                            <p>
                                I acknowledge that the treatment should preferably be applied directly over the skin. If not, I am aware not to wear any
                                metallic accessories (such as jewelry, watch or clothes containing metallic threads) during the
                                treatment. I also acknowledge that I do not have metallic or electronic implants (such as pacemakers,
                                defibrillators, metallic IUDs, etc.)
                                <span class="intials-bold">Initials:</span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="metal-elctro">
                <ul class="treatment-list">
                    <li>
                        <p class="please-answer">
                            Please answer whether you currently have or have had any of the following:

                        </p>
                    </li>
                    <li>
                        <p>
                            <span class="please-answer">Metal or electronic implants: </span> <label><input type="radio" <?= $finalData->metal == "1" ? 'checked' : '' ?> name="metal" value="1"> YES </label> &nbsp; <label><input type="radio" name="metal" value="0" <?= $finalData->metal == "0" ? 'checked' : '' ?>> NO </label>
                        </p>
                    </li>
                    <li>
                        <p>
                            Cardiac pacemakers, implanted defibrillators, implanted neurostimulators:
                        </p>
                    </li>
                    <li>
                        <p>
                            <label><input type="radio" <?= $finalData->cardiac == "1" ? 'checked' : '' ?> name="cardiac" value="1"> YES </label> &nbsp; <label><input type="radio" name="cardiac" value="0" <?= $finalData->cardiac == "0" ? 'checked' : '' ?>> NO </label>
                        </p>
                    </li>
                    <li>
                        <p>
                            Pulmonary insufficiency:
                            <span><label><input type="radio" <?= $finalData->pulmonary == "1" ? 'checked' : '' ?> name="pulmonary" value="1"> YES </label> &nbsp; <label><input type="radio" name="pulmonary" value="0" <?= $finalData->pulmonary == "0" ? 'checked' : '' ?>> NO </label></span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Malignant tumor:
                            <span><label><input type="radio" <?= $finalData->malignant == "1" ? 'checked' : '' ?> name="malignant" value="1"> YES </label> &nbsp; <label><input type="radio" name="malignant" value="0" <?= $finalData->malignant == "0" ? 'checked' : '' ?>> NO </label></span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Fever:
                            <span><label><input type="radio" <?= $finalData->fever == "1" ? 'checked' : '' ?> name="fever" value="1"> YES </label> &nbsp; <label><input type="radio" name="fever" value="0" <?= $finalData->fever == "0" ? 'checked' : '' ?>> NO </label></span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Metallic IUD:
                            <span><label><input type="radio" name="metallic" value="1"> YES </label> &nbsp; <label><input type="radio" <?= $finalData->metallic == "1" ? 'checked' : '' ?> name="metallic" value="0" <?= $finalData->metallic == "0" ? 'checked' : '' ?>> NO </label></span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Sensitivity or allergy to latex:
                            <span><label><input type="radio" name="sensitivity" value="1"> YES </label> &nbsp; <label><input type="radio" <?= $finalData->sensitivity == "1" ? 'checked' : '' ?> name="sensitivity" value="0" <?= $finalData->sensitivity == "0" ? 'checked' : '' ?>> NO </label></span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Hemorrhagic conditions:
                            <span><label><input type="radio" <?= $finalData->hemorrhagic == "1" ? 'checked' : '' ?> name="hemorrhagic" value="1"> YES </label> &nbsp; <label><input type="radio" name="hemorrhagic" value="0" <?= $finalData->hemorrhagic == "0" ? 'checked' : '' ?>> NO </label></span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Injured or otherwise impaired muscles:
                            <span><label><input type="radio" <?= $finalData->injured == "1" ? 'checked' : '' ?> name="injured" value="1"> YES </label> &nbsp; <label><input type="radio" name="injured" value="0" <?= $finalData->injured == "0" ? 'checked' : '' ?>> NO </label></span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Heart disorders:
                            <span><label><input type="radio" <?= $finalData->heart == "1" ? 'checked' : '' ?> name="heart" value="1"> YES </label> &nbsp; <label><input type="radio" name="heart" value="0" <?= $finalData->heart == "0" ? 'checked' : '' ?>> NO </label></span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Epilepsy:
                            <span><label><input type="radio" <?= $finalData->epilepsy == "1" ? 'checked' : '' ?> name="epilepsy" value="1"> YES </label> &nbsp; <label><input type="radio" name="epilepsy" value="0" <?= $finalData->epilepsy == "0" ? 'checked' : '' ?>> NO </label></span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Recent surgical procedures (muscle contraction may disrupt healing):
                            <span><label><input type="radio" <?= $finalData->procedures == "1" ? 'checked' : '' ?> name="procedures" value="1"> YES </label> &nbsp; <label><input type="radio" name="procedures" value="0" <?= $finalData->procedures == "0" ? 'checked' : '' ?>> NO </label></span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Areas of the skin which lack normal sensation:
                            <span><label><input type="radio" <?= $finalData->areas == "1" ? 'checked' : '' ?> name="areas" value="1"> YES </label> &nbsp; <label><input type="radio" name="areas" value="0" <?= $finalData->areas == "0" ? 'checked' : '' ?>> NO </label></span>
                        </p>
                    </li>
                    <li>
                        <p class="intials-bold">
                            If you answered YES to any of the above questions, please specify:
                        </p>
                    </li>
                    <li>
                        <input type="text" class="please-specify" name="pspecify" value="<?php echo set_value('pspecify', $finalData->pspecify); ?>" required>
                    </li>
                    <div>
                </ul>
            </div>
            <div class="metal-elctro">
                <ul class="treatment-list">
                    <li>
                        <p class="please-answer">
                            Please answer the following:

                        </p>
                    </li>
                    <li>
                        <p>
                            Have you been Pregnant
                            <span><label><input type="radio" <?= $finalData->pregnant == "1" ? 'checked' : '' ?> name="pregnant" value="1"> YES </label> &nbsp; <label><input type="radio" name="pregnant" value="0" <?= $finalData->pregnant == "0" ? 'checked' : '' ?>> NO </label></span>
                        </p>
                    </li>
                    <li>
                        <p>Have you given birth by?</p>
                        <input type="radio" name="birth" <?= $finalData->birth == "1" ? 'checked' : '' ?> value="1">
                        <span class="intials-bold">C-section</span>
                    </li>
                    <li>

                        <input type="radio" name="birth" <?= $finalData->birth == "0" ? 'checked' : '' ?> value="0">
                        <span class="intials-bold">Vaginal birth</span>
                    </li>

                </ul>
                <div class="strength">
                    <ul>
                        <li>
                            <p>
                                Are you satisfied with the strength of your core muscles?
                                <span><label><input type="radio" <?= $finalData->strength == "1" ? 'checked' : '' ?> name="strength" value="1"> YES </label> &nbsp; <label><input type="radio" name="strength" value="0" <?= $finalData->strength == "0" ? 'checked' : '' ?>> NO </label></span>
                            </p>
                        </li>
                        <li>
                            <p>
                                Are you satisfied with the shape of your buttocks?
                                <span><label><input type="radio" <?= $finalData->buttocks == "1" ? 'checked' : '' ?> name="buttocks" value="1"> YES </label> &nbsp; <label><input type="radio" name="buttocks" value="0" <?= $finalData->buttocks == "0" ? 'checked' : '' ?>> NO </label></span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="metal-elctro">
                <ul class="treatment-list">
                    <li>
                        <p class="please-answer">
                            Treatment considerations
                        </p>
                        <p>
                            I am aware that the treatment cannot be applied over the head, heart and neck.
                        </p>
                        <p>
                            I am aware that pregnancy and nursing are contraindicated, and pregnant women cannot undergo the treatment.
                        </p>
                        <p>
                            I understand that there are certain risks associated with Emsculpt treatments and they include but are not limited to muscular
                            pain, temporary muscle spasm, temporary joint or tendon pain, local erythema or skin redness
                            and intramuscular fat decreases. </p>
                        <p>I understand that the treatment over injured or otherwise impaired muscles is contraindicated.</p>
                        <p>
                            I understand that the treatment may involve risks of complications or injury from both known and unknown causes, and I freely
                            assume these risks.
                        </p>
                        <p>
                            I agree to before and after treatment photographs, measurements and weighing, as this will help for medical evaluation of
                            the result of the treatment. Information will be acquired for medical records or marketing purposes.
                        </p>
                        <p>
                            I understand the results may vary from person to person and that an exact result cannot be predicted.
                        </p>
                        <p>
                            Completing a full treatment series is necessary to maximize treatment efficacy. It is very unlikely, but it is possible that
                            you will not feel any recognizable results after the procedure. I acknowledge the results may
                            not meet my expectations.
                        </p>
                        <p>
                            I certify that I have read this entire document and that I agree with all provisions. I certify that I have had the opportunity
                            to ask questions and these questions have been answered in full to my satisfaction. I fully understand
                            the treatment conditions, the procedure, and possible side effects .
                        </p>
                        <p>
                            I have read the above information, and I request and give my consent to be treated with the Emsculpt by the practitioner
                            in this practice and their designated staff. My signature below indicates that the above information
                            is accurate and current
                        </p>
                    </li>
                </ul>
            </div>
            <div class="end-of-page">
                <ul class="treatment-list">
                    <li>
                        <p class="font-bold">Patient Name:
                            <input type="text" class="signatory" name="pname" value="<?php echo set_value('pname', $finalData->pname); ?>" required>
                        </p>
                        <p class="font-bold">Date:
                            <input type="text" class="signatory datepickernk" name="pdate" value="<?php echo set_value('pdate', $finalData->pdate); ?>" required>
                        </p>
                        <p class="font-bold">Signature:
                            <input type="text" class="signatory" name="psignatory" value="<?php echo set_value('psignatory', $finalData->psignatory); ?>" required>
                        </p>
                        <p class="font-bold">Witness:
                            <input type="text" class="signatory" name="witness" value="<?php echo set_value('witness', $finalData->witness); ?>" required>
                        </p>
                        <p class="font-bold">Date:
                            <input type="text" class="signatory datepickernk" name="pwitness" value="<?php echo set_value('pwitness', $finalData->pwitness); ?>" required>
                        </p>
                        <p class="font-bold">Signature:
                            <input type="text" class="signatory" name="witnesssign" value="<?php echo set_value('witnesssign', $finalData->witnesssign); ?>" required>
                        </p>

                    </li>
                </ul>
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