<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h2>Step 4. Uploading Supplementary Files</h2>
            <div id="content">
               <ul class="steplist">
                  <li id="step1" ><a href="https://iptek.its.ac.id/index.php/itj/author/submit/1?articleId=12536">1. Start</a></li>
                  <li id="step2" ><a href="https://iptek.its.ac.id/index.php/itj/author/submit/2?articleId=12536">2. Upload Submission</a></li>
                  <li id="step3" ><a href="https://iptek.its.ac.id/index.php/itj/author/submit/3?articleId=12536">3. Enter Metadata</a></li>
                  <li id="step4"  class="current">4. Upload Supplementary Files</li>
                  <li id="step5" >5. Confirmation</li>
               </ul>
               <form id="submitForm" method="post" action="https://iptek.its.ac.id/index.php/itj/author/saveSubmit/4" enctype="multipart/form-data">
                  <input type="hidden" name="articleId" value="12536" />
                  <p>This optional step allows Supplementary Files to be added to a submission. The files, which can be in any format, might include (a) research instruments, (b) data sets, which comply with the terms of the study's research ethics review, (c) sources that otherwise would be unavailable to readers, (d) figures and tables that cannot be integrated into the text itself, or other materials that add to the contribution of the work.</p>
                  <table class="listing" width="100%">
                     <tr>
                        <td colspan="5" class="headseparator">&nbsp;</td>
                     </tr>
                     <tr class="heading" valign="bottom">
                        <td width="5%">ID</td>
                        <td width="40%">Title</td>
                        <td width="25%">Original file name</td>
                        <td width="15%" class="nowrap">Date uploaded</td>
                        <td width="15%" align="right">Action</td>
                     </tr>
                     <tr>
                        <td colspan="6" class="headseparator">&nbsp;</td>
                     </tr>
                     <tr valign="top">
                        <td colspan="6" class="nodata">No supplementary files have been added to this submission.</td>
                     </tr>
                  </table>
                  <div class="separator"></div>
                  <table class="data" width="100%">
                     <tr>
                        <td width="30%" class="label">
                           <label for="uploadSuppFile" >
                           Upload supplementary file </label>
                        </td>
                        <td width="70%" class="value">
                           <input type="file" name="uploadSuppFile" id="uploadSuppFile"  class="uploadField" /> <input name="submitUploadSuppFile" type="submit" class="button" value="Upload" />
                        </td>
                     </tr>
                  </table>
                  <div class="separator"></div>
                  <p><input type="submit" onclick="confirmForgottenUpload()" value="Save and continue" class="button defaultButton" /> <input type="button" value="Cancel" class="button" onclick="confirmAction('https://iptek.its.ac.id/index.php/itj/author', 'You can complete this submission at a later date by selecting Active Submissions from the Author home.')" /></p>
               </form>
            </div>

<?= $this->endSection(); ?>