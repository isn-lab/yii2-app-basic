<?php
    /**
     * Copyright (c) 2020.
     * ISNLab
     * Sedov Sergey
     */

    namespace app\models;

    use isnlab\common\CommonFunc;
    use isnlab\common\services\swift\MailerService;
    use Yii;
    use yii\base\Model;
    use yii\swiftmailer\Mailer;

    /**
     * Class ContactForm
     * @package app\models
     */
    class ContactForm extends Model
    {
        /**
         * @var string
         */
        public $name;
        /**
         * @var string
         */
        public $email;
        /**
         * @var string
         */
        public $subject;
        /**
         * @var string
         */
        public $body;
        /**
         * @var string
         */
        public $verifyCode;

        /**
         * @return array the validation rules.
         */
        public function rules()
        {
            return [
                // name, email, subject and body are required
                [['name', 'email', 'subject', 'body'], 'required'],
                // email has to be a valid email address
                ['email', 'email'],
                // verifyCode needs to be entered correctly
                ['verifyCode', 'captcha', 'captchaAction' => 'main/captcha',],
            ];
        }

        /**
         * @return array customized attribute labels
         */
        public function attributeLabels()
        {
            return [
                'verifyCode' => 'Проверочный код',
                'name'       => 'Ваше имя',
                'email'      => 'E-Mail',
                'subject'    => 'Тема',
                'body'       => 'Сообщение',
            ];
        }

        /**
         * Sends an email to the specified email address using the information collected by this model.
         * @return boolean whether the model passes validation
         */
        public function contact()
        {
            if ($this->validate()) {
                $email     = Yii::$app->params['adminEmail'];
                $fromEmail = Yii::$app->params['fromEmail'];

                /** @var Mailer $mailer */
                $mailer = CommonFunc::getValidatedService(MailerService::class);

                $mailer->compose('contact', ['model' => $this])
                       ->setTo($email)
                    //->setFrom($fromEmail)
                       ->setSubject($this->subject)
//                ->setTextBody($this->body)
                       ->send();

                return true;
            }

            return false;
        }
    }
