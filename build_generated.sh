#!/bin/bash

GIT_USER=authtics
GIT_GOOGLE_REPO=php-google-generated
GIT_AUTHME_REPO=php-authme-generated

docker run -v `pwd`/google-openapi.yaml:/api.yaml -v `pwd`/generated/google:/out/ \
	--rm -it openapitools/openapi-generator-cli generate -i /api.yaml \
	-g php -o /out/ --git-user-id "${GIT_USER}" --git-repo-id "${GIT_GOOGLE_REPO}" \
	--invoker-package GeneratedGoogle

docker run -v `pwd`/authtics-openapi.yaml:/api.yaml -v `pwd`/generated/authtics:/out/ \
	--rm -it openapitools/openapi-generator-cli generate -i /api.yaml \
	-g php -o /out/ --git-user-id "${GIT_USER}" --git-repo-id "${GIT_AUTHME_REPO}" \
	--invoker-package GeneratedAuthMe
