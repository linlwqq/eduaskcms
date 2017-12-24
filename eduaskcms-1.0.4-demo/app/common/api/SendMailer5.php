<?php
namespace app\common\api;

class SendMailer5
{
    private $Host;
    private $From;
    private $Password;
    private $FromName;
    
    public function __construct()
    {
        $this->Host = trim(setting('email_host'));
        $this->From = trim(setting('email_from'));
        $this->Password = trim(setting('email_password'));
        $this->FromName = trim(setting('email_fromname'));
        
        if (empty($this->Host) || empty($this->From) || empty($this->Password) || empty($this->FromName)) {
            exception('请在“系统设置”中配置邮件接口');
            exit;
        }
    }
    
    /**
    * @param $tomail string 接受邮件的账号
    * @param $subject string 邮件标题
    * @param $body string 邮件主体内容 支持html
    * @param $fromname string 发件人名称 可以不填
    * @param $attachment array 附件路径
    */    
    public function send($tomail, $subject, $body, $fromname = '', $attachment = null)
    {
        include LIBS_VENDOR_PATH . 'PHPMailer-5.2.13' . DS . 'class.phpmailer.php';
        
        include LIBS_VENDOR_PATH . 'PHPMailer-5.2.13' . DS . 'class.smtp.php';
        
        $mail = new \PHPMailer();
        //设置编码
        $mail->CharSet = 'utf-8';
        //告诉服务器使用什么协议
        $mail->isSMTP();
        //我的服务商
        $mail->Host = $this->Host;
        //打开smtp认证
        $mail->SMTPAuth = true ;
        //发送html
        $mail->isHTML(true);
        
        //发件人
        $mail->Username = $this->From;
        $mail->Password = $this->Password;
        $mail->From  = $this->From;
        $mail->FromName = $fromname ? $fromname : $this->FromName;
        
        //发件内容
        $mail->Subject = $subject;
        $mail->Body = $body;
        
        //收件人
        $mail->addAddress($tomail);
        
        //添加附件
        if (is_array($attachment)) {
            foreach ($attachment as $file) {
                is_file($file) && $mail->AddAttachment($file);
            }
        }
                
        return $mail->Send() ? true : $mail->ErrorInfo;
    }    
}
