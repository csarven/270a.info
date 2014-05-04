#!/bin/bash
rm 270a.info.void-linksets.nt

agencies=(uis frb fao oecd ecb imf worldbank transparency bfs);
for agency in "${agencies[@]}" ; do rapper -g http://"$agency".270a.info/.well-known/void | grep linkset >> 270a.info.void-linksets.nt ; done

