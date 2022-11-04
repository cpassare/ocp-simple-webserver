# ocp-simple-webserver

For building and running this code in OpenShift execute:

~~~sh
oc new-app --name ocp-simple-webserver httpd~https://github.com/cpassare/ocp-simple-webserver.git
~~~

For creating an insecure route:

~~~sh
oc expose svc/ocp-simple-webserver
~~~
