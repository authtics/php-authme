<?php
    namespace AuthMe;

    use Firebase\JWT\JWT;

    class Application {
        private const tokenUrl = "https://www.googleapis.com/oauth2/v4/token";
        private const url = 
            "https://us-central1-approverequest-fbf70.cloudfunctions.net/authenticate";
        private $privateKey;
        private $account;

        function __construct($account, $privateKey) {
            $this->account = $account . "@approverequest-fbf70.iam.gserviceaccount.com";
            $this->privateKey = $privateKey;
        }

        private function getToken() {
            $epoch = time();

            $payload = array(
                "iss" => $this->account,
                "sub" => $this->account,
                "aud" => Application::tokenUrl,
                "target_audience" => Application::url,
                "iat" => $epoch,
                "exp" => $epoch + 10,
            );

            $jwt = JWT::encode($payload, $this->privateKey, "RS256");

            $config = \GeneratedGoogle\Configuration::getDefaultConfiguration()
                ->setAccessToken($jwt);

            $apiInstance = new \GeneratedGoogle\Api\TokenApi(null, $config);
            try {
                $result = $apiInstance->generateToken(
                    "urn:ietf:params:oauth:grant-type:jwt-bearer",
                    $jwt
                );

                return $result["id_token"];
            } catch (Exception $e) {
                echo "Token generation failed", $e, PHP_EOL;
            }
        }

        public function authenticate($username) {
            $token = $this->getToken();

            $request = new \GeneratedAuthMe\Model\AuthenticationRequest();
            $request->setUsername($username);
            $config = \GeneratedAuthMe\Configuration::getDefaultConfiguration()
                ->setAccessToken($token);
            $apiInstance = new \GeneratedAuthMe\Api\AuthenticateApi(null, $config);

            try {
                $result = $apiInstance->authenticate($request);

                return $result;
            } catch (Exception $e) {
                echo "Token generation failed", $e, PHP_EOL;
            }
        }
    }