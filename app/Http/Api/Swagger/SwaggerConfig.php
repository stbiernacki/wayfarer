<?php

/**
 * @SWG\Swagger(
 *     schemes={"http"},
 *     host=API_HOST,
 *     basePath="/",
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="API for Wayfarer",
 *         description="This is API documentation for Wayfarer System",
 *         @SWG\Contact(
 *             email="stbiernacki@live.com"
 *         ),
 *     ),
 *     @SWG\ExternalDocumentation(
 *         description="Find out more about Swagger",
 *         url="http://swagger.io"
 *     ),
 *	   @SWG\SecurityScheme(
 * 			securityDefinition="access_token",
 *   		type="apiKey",
 *   		in="query",
 *   		name="access_token"
 * 		)
 * )
 */
namespace App\Http\Api\Swagger;
