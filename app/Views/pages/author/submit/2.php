<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<h2>Step 2. Uploading the Submission</h2>
            <div id="content">
               <ul class="steplist">
                  <li id="step1" ><a href="https://iptek.its.ac.id/index.php/itj/author/submit/1?articleId=12536">1. Start</a></li>
                  <li id="step2"  class="current">2. Upload Submission</li>
                  <li id="step3" ><a href="https://iptek.its.ac.id/index.php/itj/author/submit/3?articleId=12536">3. Enter Metadata</a></li>
                  <li id="step4" >4. Upload Supplementary Files</li>
                  <li id="step5" >5. Confirmation</li>
               </ul>
               <form method="post" action="https://iptek.its.ac.id/index.php/itj/author/saveSubmit/2" enctype="multipart/form-data">
                  <input type="hidden" name="articleId" value="12536" />
                  <div id="uploadInstructions">
                     <p>To upload a manuscript to this journal, complete the following steps.</p>
                     <ol>
                        <li>On this page, click Browse (or Choose File) which opens a Choose File window for locating the file on the hard drive of your computer.</li>
                        <li>Locate the file you wish to submit and highlight it.</li>
                        <li>Click Open on the Choose File window, which places the name of the file on this page.</li>
                        <li>Click Upload on this page, which uploads the file from the computer to the journal's web site and renames it following the journal's conventions.</li>
                        <li>Once the submission is uploaded, click Save and Continue at the bottom of this page.</li>
                     </ol>
                  </div>
                  <p>Encountering difficulties? Contact <a href="mailto:"></a> for assistance.</p>
                  <div class="separator"></div>
                  <div id="submissionFile">
                     <h3>Submission File</h3>
                     <table class="data" width="100%">
                        <tr valign="top">
                           <td width="20%" class="label">File Name</td>
                           <td width="80%" class="value"><a href="https://iptek.its.ac.id/index.php/itj/author/download/12536/31574">12536-31574-1-SM.pdf</a></td>
                        </tr>
                        <tr valign="top">
                           <td width="20%" class="label">Original file name</td>
                           <td width="80%" class="value">12515-31518-1-SM.pdf</td>
                        </tr>
                        <tr valign="top">
                           <td width="20%" class="label">File Size</td>
                           <td width="80%" class="value">916KB</td>
                        </tr>
                        <tr valign="top">
                           <td width="20%" class="label">Date uploaded</td>
                           <td width="80%" class="value">2022-03-15 07:06 PM</td>
                        </tr>
                     </table>
                  </div>
                  <div class="separator"></div>
                  <div id="addSubmissionFile">
                     <table class="data" width="100%">
                        <tr>
                           <td width="30%" class="label">
                              <label for="submissionFile" >
                              Replace submission file </label>
                           </td>
                           <td width="70%" class="value">
                              <input type="file" class="uploadField" name="submissionFile" id="submissionFile" /> <input name="uploadSubmissionFile" type="submit" class="button" value="Upload" />
                           </td>
                        </tr>
                     </table>
                  </div>
                  <div class="separator"></div>
                  <p><input type="submit" value="Save and continue" class="button defaultButton" /> <input type="button" value="Cancel" class="button" onclick="confirmAction('https://iptek.its.ac.id/index.php/itj/author', 'You can complete this submission at a later date by selecting Active Submissions from the Author home.')" /></p>
               </form>
            </div>
<?= $this->endSection(); ?>