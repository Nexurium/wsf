#!/bin/bash
if test -z $WSFC_HOME; then 
    WSFC_HOME=$PWD/../../..
fi
$WSFC_HOME/bin/wsclient http://localhost:9090/axis2/services/echo <$WSFC_HOME/bin/samples/wsclient/data/echo.xml

