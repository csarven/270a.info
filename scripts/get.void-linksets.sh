#!/bin/bash
mv 270a.info.void-linksets.nt 270a.info.void-linksets.nt.bak

agencies=(uis frb fao oecd ecb imf worldbank transparency bfs bis);
for agency in "${agencies[@]}" ; do rapper -g http://"$agency".270a.info/.well-known/void | grep linkset >> 270a.info.void-linksets.nt ; done

