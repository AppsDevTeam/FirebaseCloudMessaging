# FirebaseCloudMessaging
Firebase Cloud Messaging Extension For Nette

1. Install via composer
```
composer require sngrl/php-firebase-cloud-messaging:dev-master adt/firebase-cloud-messaging:dev-master
```

2. Setup extension in neon config
```
extensions:
	firebase: \Adt\FirebaseCloudMessaging\DI\FirebaseExtension

firebase:
	serverKey: ***
```

3. Inject \sngrl\PhpFirebaseCloudMessaging\Client and follow instructions here https://github.com/sngrl/php-firebase-cloud-messaging
