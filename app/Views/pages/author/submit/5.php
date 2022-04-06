<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
            <div id="breadcrumb">
               <a href="/index">Home</a> &gt;
               <a href="/user" class="hierarchyLink">User</a> &gt;
               <a href="/author" class="hierarchyLink">Author</a> &gt;
               <a href="/author" class="hierarchyLink">Submissions</a> &gt;
               <a href="/author/submit/5?articleId=12525" class="current">New Submission</a>
            </div>
            <h2>Step 5. Confirming the Submission</h2>
            <div id="content">
               <ul class="steplist">
                  <li id="step1" ><a href="/author/submit/1?articleId=12536">1. Start</a></li>
                  <li id="step2" ><a href="/author/submit/2?articleId=12536">2. Upload Submission</a></li>
                  <li id="step3" ><a href="/author/submit/3?articleId=12536">3. Enter Metadata</a></li>
                  <li id="step4" ><a href="/author/submit/4?articleId=12536">4. Upload Supplementary Files</a></li>
                  <li id="step5"  class="current">5. Confirmation</li>
               </ul>
               <p>To submit your manuscript to Information Technology Journal click Finish Submission. The submission's principal contact will receive an acknowledgement by email and will be able to view the submission's progress through the editorial process by logging in to the journal web site. Thank you for your interest in publishing with Information Technology Journal.</p>
               <form method="post" action="/author/saveSubmit/5">
                  <input type="hidden" name="articleId" value="12536" />
                  <h3>File Summary</h3>
                  <table class="listing" width="100%">
                  <tr>
                     <td colspan="5" class="headseparator">&nbsp;</td>
                  </tr>
                  <tr class="heading" valign="bottom">
                     <td width="10%">ID</td>
                     <td width="35%">Original file name</td>
                     <td width="25%">Type</td>
                     <td width="20%" class="nowrap">File Size</td>
                     <td width="10%" class="nowrap">Date uploaded</td>
                  </tr>
                  <tr>
                     <td colspan="5" class="headseparator">&nbsp;</td>
                  </tr>
                  <tr valign="top">
                  <td colspan="5" class="nodata">No files have been attached to this submission.</td>
                  </tr>
                  </table>
                  <!-- Ketika sudah upload -->
                  <!-- <table class="listing" width="100%">
                     <tr>
                        <td colspan="5" class="headseparator">&nbsp;</td>
                     </tr>
                     <tr class="heading" valign="bottom">
                        <td width="10%">ID</td>
                        <td width="35%">Original file name</td>
                        <td width="25%">Type</td>
                        <td width="20%" class="nowrap">File Size</td>
                        <td width="10%" class="nowrap">Date uploaded</td>
                     </tr>
                     <tr>
                        <td colspan="5" class="headseparator">&nbsp;</td>
                     </tr>
                     <tr valign="top">
                        <td>31574</td>
                        <td><a class="file" href="/author/download/12536/31574">12515-31518-1-SM.pdf</a></td>
                        <td>Submission File</td>
                        <td>916KB</td>
                        <td>03-15</td>
                     </tr>
                  </table> -->
                  <div class="separator"></div>
                  <p><input type="submit" value="Finish Submission" class="button defaultButton" /> <input type="button" value="Cancel" class="button" onclick="confirmAction('/author', 'You can complete this submission at a later date by selecting Active Submissions from the Author home.')" /></p>
               </form>
            </div>

<?= $this->endSection(); ?>