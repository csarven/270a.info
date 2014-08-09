<?php
header ("Content-Type: application/xhtml+xml; charset=utf-8");
header ("Content-Language: en");
echo '<?xml version="1.0" encoding="utf-8"?>'."\n";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
  xmlns:xsd ="http://www.w3.org/2001/XMLSchema#"
  xmlns:owl="http://www.w3.org/2002/07/owl#"
  xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#"
  xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
  xmlns:dcterms="http://purl.org/dc/terms/"
  xmlns:foaf="http://xmlns.com/foaf/0.1/"

  xml:lang="en"
  xmlns:this="http://270a.info/">
    <head>
        <title>270a Linked Dataspaces</title>

        <link rel="shortcut icon" href="http://270a.info/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="http://270a.info/theme/default/css/display.css" media="all"/>

        <meta name="description" content="270a Linked Dataspaces"/>
        <meta name="author" content="http://csarven.ca/#i"/>
    </head>

    <body id="site_home" about="[this:]" typeof="foaf:Document">
        <div id="wrap">
            <div id="header">
                <address about="[this:#i]" typeof="foaf:Organization" id="site_contact" class="vcard">
                    <a rel="foaf:homepage" href="http://270a.info/" class="url home bookmark">
                        <object about="[this:media/images/270a.svg]" typeof="foaf:Image" property="rdfs:label" content="270a logo" type="image/svg+xml" data="/media/images/270a.svg" width="48" height="48"/>
                        <span property="foaf:name rdfs:label" class="fn org">270a</span>
                    </a>
                </address><span about="[this:#i]" rel="foaf:img" resource="/media/images/270a.svg"></span>
            </div>

            <div id="core">
                <div id="content" class="hentry">
                    <h1 property="dcterms:title" class="entry-title">270a Linked Dataspaces</h1>

                    <div id="content_inner">
                        <div class="entry-content" property="dcterms:description" datatype="">
                            <p rel="rdfs:seeAlso"><a about="http://csarven.ca/statistical-linked-dataspaces" property="rdfs:label"  href="http://csarven.ca/statistical-linked-dataspaces">Statistical Linked Dataspaces</a>, where some are based on <a about="http://csarven.ca/linked-sdmx-data" property="rdfs:label" href="http://csarven.ca/linked-sdmx-data">Linked SDMX Data</a>:</p>

                            <p id="figure_270a-dataspaces" about="[this:#i]" rel="foaf:depiction"><object about="[this:media/images/270a.cloud.svg]" typeof="foaf:Image" property="rdfs:label" content="270a Cloud" type="image/svg+xml" data="/media/images/270a.cloud.svg" width="640" height="480"/></p>

                            <ul id="dataspaces" rel="rdfs:seeAlso">
                                <li><a about="http://worldbank.270a.info/" property="rdfs:label" href="http://worldbank.270a.info/">World Bank</a></li>
                                <li><a about="http://transparency.270a.info/" property="rdfs:label" href="http://transparency.270a.info/">Transparency International</a></li>

                                <li><a about="http://oecd.270a.info/" property="rdfs:label" href="http://oecd.270a.info/">Organisation for Economic Co-operation and Development</a></li>
                                <li><a about="http://bfs.270a.info/" property="rdfs:label" href="http://bfs.270a.info/">Swiss Federal Statistical Office</a></li>
                                <li><a about="http://fao.270a.info/" property="rdfs:label" href="http://fao.270a.info/">Food and Agriculture Organization of the United Nations</a></li>
                                <li><a about="http://ecb.270a.info/" property="rdfs:label" href="http://ecb.270a.info/">European Central Bank</a></li>
                                <li><a about="http://imf.270a.info/" property="rdfs:label" href="http://imf.270a.info/">International Monetary Fund</a></li>
                                <li><a about="http://uis.270a.info/" property="rdfs:label" href="http://uis.270a.info/">UNESCO Institute for Statistics</a></li>
                                <li><a about="http://frb.270a.info/" property="rdfs:label" href="http://frb.270a.info/">Federal Reserve Board</a></li>
                                <li><a about="http://bis.270a.info/" property="rdfs:label" href="http://bis.270a.info/">Bank for International Settlements</a></li>
                                <li><a about="http://abs.270a.info/" property="rdfs:label" href="http://abs.270a.info/">Australian Bureau of Statistics</a></li>
                            </ul>

                            <p id="stats-analysis"><a rel="rdfs:seeAlso" href="http://stats.270a.info/">Stats Analysis</a> is a human and machine-friendly Web based application which uses the statistical data from above linked dataspaces, makes federated queries and generates analysis. You can read more about it at <a rel="rdfs:seeAlso" href="http://csarven.ca/linked-statistical-data-analysis">Linked Statistical Data Analysis</a>.</p>

                            <p rel="rdfs:seeAlso">See also 270a.info's <a about="/.well-known/void" property="rdfs:label" href="/.well-known/void">VoID</a>.</p>
                        </div>
                    </div>
                </div>

                <dl id="page_notice">
                    <dt>Page notice</dt>
                    <dd>
                        <ul>
                            <li>Creator: <a rel="dcterms:creator foaf:maker" rev="foaf:made" href="http://csarven.ca/#i"><span property="rdfs:label foaf:name">Sarven Capadisli</span></a></li>
                            <li class="notice_updated">Last updated: <abbr property="dcterms:issued" datatype="xsd:dateTime" content="2014-08-04T00:00:00Z" class="published updated" title="2014-08-04T00:00:00Z">2014-08-04</abbr></li>
                        </ul>
                    </dd>
                </dl>
            </div>

        </div>

    </body>
</html>
