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
  xmlns:foaf="http://xmlns.com/foaf/0.1/">
    <head>
        <title>270a Linked Dataspaces</title>

        <link rel="shortcut icon" href="http://270a.info/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="http://270a.info/theme/default/css/display.css?version=0.0.3" media="all"/>

        <meta name="description" content="270a Linked Dataspaces"/>
        <meta name="author" content="http://csarven.ca/#i"/>
    </head>

    <body id="site_home" about="http://270a.info/" typeof="foaf:Document">
        <div id="wrap">
            <div id="header">
                <address id="site_contact" class="vcard">
                    <a href="http://270a.info/" class="url home bookmark">
                        <img src="/theme/default/images/logos/logo_270a-linked-data.png" width="48" height="48" alt=""/>
                        <span class="fn org">270a Linked Dataspaces</span>
                    </a>
                </address>
            </div>

            <div id="core">
                <div id="content" class="hentry">
                    <h1 property="dcterms:title" class="entry-title">270a Linked Dataspaces</h1>

                    <div id="content_inner">
                        <div class="entry-content" property="dcterms:description">
                            <p><a rel="rdfs:seeAlso" property="rdfs:label" href="http://csarven.ca/statistical-linked-dataspaces">Statistical Linked Dataspaces</a>, where some are based on <a rel="rdfs:seeAlso" property="rdfs:label" href="http://csarven.ca/linked-sdmx-data">Linked SDMX Data</a>:</p>

                            <p id="figure_270a-dataspaces"><object type="image/svg+xml" data="/media/images/270a.cloud.svg" width="640" height="480"/></p>

                            <ul id="dataspaces">
                                <li><a rel="rdfs:seeAlso" property="rdfs:label" href="http://worldbank.270a.info/">World Bank</a></li>
                                <li><a rel="rdfs:seeAlso" property="rdfs:label" href="http://transparency.270a.info/">Transparency International</a></li>

                                <li><a rel="rdfs:seeAlso" property="rdfs:label" href="http://oecd.270a.info/">Organisation for Economic Co-operation and Development</a></li>
                                <li><a rel="rdfs:seeAlso" property="rdfs:label" href="http://bfs.270a.info/">Swiss Federal Statistical Office</a></li>
                                <li><a rel="rdfs:seeAlso" property="rdfs:label" href="http://fao.270a.info/">Food and Agriculture Organization of the United Nations</a></li>
                                <li><a rel="rdfs:seeAlso" property="rdfs:label" href="http://ecb.270a.info/">European Central Bank</a></li>
                                <li><a rel="rdfs:seeAlso" property="rdfs:label" href="http://imf.270a.info/">International Monetary Fund</a></li>
                                <li><a rel="rdfs:seeAlso" property="rdfs:label" href="http://uis.270a.info/">UNESCO Institute for Statistics</a></li>
                                <li><a rel="rdfs:seeAlso" property="rdfs:label" href="http://frb.270a.info/">Federal Reserve Board</a></li>
                            </ul>

                            <p id="stats-analysis"><a rel="rdfs:seeAlso" property="rdfs:label" href="http://stats.270a.info/">Stats Analysis</a> is a human and machine-friendly Web based application which uses the statistical data from above linked dataspaces, makes federated queries and generates analysis. You can read more about it at <a rel="rdfs:seeAlso" property="rdfs:label" href="http://csarven.ca/linked-statistical-data-analysis">Linked Statistical Data Analysis</a>.</p>

                            <p>See also 270a.info's <a href="/.well-known/void">VoID</a>.</p>
                        </div>
                    </div>
                </div>

                <dl id="page_notice">
                    <dt>Page notice</dt>
                    <dd>
                        <ul>
                            <li>Creator: <a rel="dcterms:creator foaf:maker" href="http://csarven.ca/#i"><span property="rdfs:label foaf:name">Sarven Capadisli</span></a></li>
                            <li class="notice_updated">Last updated: <abbr property="dcterms:issued" datatype="xsd:dateTime" content="2014-04-23T00:00:00Z" class="published updated" title="2014-04-23T00:00:00Z">2014-04-23</abbr></li>
                        </ul>
                    </dd>
                </dl>
            </div>

            <div id="footer">
            </div>

        </div>

    </body>
</html>
