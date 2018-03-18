@extends('layouts.master')

@section('head_extra')
@endsection

@section('content')
    <div class='row'>
        <div class='col-md-12'>
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ trans('impressum::general.page.index.box-title') }}</h3>
                    &nbsp;

                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>

                <div class="box-body">

                    <div class="form-group">
<b>1. Acceptance of our Terms</b><br />
<br />
By visiting the website <?= $site_url ?>, viewing, accessing or otherwise using any of the services or information created, collected, compiled or submitted to <?= $site_url ?>, you agree to be bound by the following Terms and Conditions of Service. If you do not want to be bound by our Terms your only option is not to visit, view or otherwise use the services of <?= $site_url ?>. You understand, agree and acknowledge that these Terms constitute a legally binding agreement between you and <?= $site_url ?> and that your use of <?= $site_url ?> shall indicate your conclusive acceptance of this agreement.<br />
<br />
<b>2. Provision of Services</b><br />
<br />
You agree and acknowledge that <?= $site_url ?> is entitled to modify, improve or discontinue any of its services at its sole discretion and without notice to you even if it may result in you being prevented from accessing any information contained in it. Furthermore, you agree and acknowledge that <?= $site_url ?> is entitled to provide services to you through subsidiaries or affiliated entities.<br />
<br />
<b>3. Proprietary Rights</b><br />
<br />
You acknowledge and agree that <?= $site_url ?> may contain proprietary and confidential information including trademarks, service marks and patents protected by intellectual property laws and international intellectual property treaties. <?= $site_url ?> authorizes you to view and make a single copy of portions of its content for offline, personal, non-commercial use. Our content may not be sold, reproduced, or distributed without our written permission. Any third-party trademarks, service marks and logos are the property of their respective owners. Any further rights not specifically granted herein are reserved.<br />
<br />
<b>4. Submitted Content</b><br />
<br />
When you submit content to <?= $site_url ?> you simultaneously grant <?= $site_url ?> an irrevocable, worldwide, royalty free license to publish, display, modify, distribute and syndicate your content worldwide. You confirm and warrant that you have the required authority to grant the above license to <?= $site_url ?>.<br />
<br />
<b>5. Termination of Agreement</b><br />
<br />
The Terms of this agreement will continue to apply in perpetuity until terminated by either party without notice at any time for any reason. Terms that are to continue in perpetuity shall be unaffected by the termination of this agreement.<br />
<br />
<b>6. Disclaimer of Warranties</b><br />
<br />
You understand and agree that your use of <?= $site_url ?> is entirely at your own risk and that our services are provided "As Is" and "As Available". <?= $site_url ?> does not make any express or implied warranties, endorsements or representations whatsoever as to the operation of the <?= $site_url ?> website, information, content, materials, or products. This shall include, but not be limited to, implied warranties of merchantability and fitness for a particular purpose and non-infringement, and warranties that access to or use of the service will be uninterrupted or error-free or that defects in the service will be corrected.<br />
<br />
<b>7. Limitation of Liability</b><br />
<br />
You understand and agree that <?= $site_url ?> and any of its subsidiaries or affiliates shall in no event be liable for any direct, indirect, incidental, consequential, or exemplary damages. This shall include, but not be limited to damages for loss of profits, business interruption, business reputation or goodwill, loss of programs or information or other intangible loss arising out of the use of or the inability to use the service, or information, or any permanent or temporary cessation of such service or access to information, or the deletion or corruption of any content or information, or the failure to store any content or information. The above limitation shall apply whether or not <?= $site_url ?> has been advised of or should have been aware of the possibility of such damages. In jurisdictions where the exclusion or limitation of liability for consequential or incidental damages is not allowed the liability of <?= $site_url ?> is limited to the greatest extent permitted by law.<br />
<br />
<b>8. External Content</b><br />
<br />
<?= $site_url ?> may include hyperlinks to third-party content, advertising or websites. You acknowledge and agree that <?= $site_url ?> is not responsible for and does not endorse any advertising, products or resource available from such resources or websites.<br />
<br />
<b>9. Jurisdiction</b><br />
<br />
You expressly understand and agree to submit to the personal and exclusive jurisdiction of the courts of the country, state, province or territory determined solely by <?= $site_url ?> to resolve any legal matter arising from this agreement or related to your use of <?= $site_url ?>. If the court of law having jurisdiction, rules that any provision of the agreement is invalid, then that provision will be removed from the Terms and the remaining Terms will continue to be valid.<br />
<br />
<b>10. Entire Agreement</b><br />
<br />
You understand and agree that the above Terms constitute the entire general agreement between you and <?= $site_url ?>. You may be subject to additional Terms and conditions when you use, purchase or access other services, affiliate services or third-party content or material.<br />
<br />
<b>11. Changes to the Terms</b><br />
<br />
<?= $site_url ?> reserves the right to modify these Terms from time to time at our sole discretion and without any notice. Changes to our Terms become effective on the date they are posted and your continued use of <?= $site_url ?> after any changes to Terms will signify your agreement to be bound by them.<br />
<br />
                    </div><!-- /.form-group -->

                </div><!-- /.box-body -->

            </div><!-- /.box -->
        </div><!-- /.col -->

    </div><!-- /.row -->
    @endsection


<!-- Optional bottom section for modals etc... -->
@section('body_bottom')
@endsection
